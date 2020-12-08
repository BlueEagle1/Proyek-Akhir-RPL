<?php namespace App\Controllers;

use App\Models\ModelLayanan;
use App\Models\ModelPelanggan;
use App\Models\ModelPemesanan;
use App\Models\ModelPromo;
use App\Models\ModelTransaksi;

class Home extends BaseController
{
	public function index()
	{
		if(session()->get('username_pemilik')) {
			return view('index_pemilik');
		}
		return view('index');
	}

	public function index_pemilik()
	{
		return view('index_pemilik');
	}

	public function about()
	{
		return view('about');
	}

	public function service()
	{
		return view('service');
	}

	public function kontak()
	{
		return view('kontak');
	}

	public function order()
	{
		if(empty(session()->get('username'))) {
			return redirect()->to(base_url('login'));
		}
		if(session()->get('username_pemilik')) {
			return view('index_pemilik');
		}
		return view('order');
	}

	public function check()
	{
		if(empty(session()->get('username'))) {
			return redirect()->to(base_url('login'));
		}
		if(session()->get('username_pemilik')) {
			return view('index_pemilik');
		}
		return view('check');
	}

	public function new_order()
	{
		$layanan = new ModelLayanan();
		if(empty(session()->get('username'))) {
			return redirect()->to(base_url('login'));
		}
		if(session()->get('username_pemilik')) {
			return view('index_pemilik');
		}
		$data['layanan'] = $layanan->peroleh_layanan();
		return view('new_order', $data);
	}

	public function check_promo_code()
	{
		$session = session();
		$kode_promo = $this->request->getGet('kode_promo');
		$promo = new ModelPromo();
		if(empty(session()->get('username'))) {
			return redirect()->to(base_url('login'));
		}
		if(session()->get('username_pemilik')) {	
			return view('index_pemilik');
		}
		$data['promo'] = $promo->peroleh_promo($kode_promo);
		if (!empty($data['promo'])) {
			cache()->save('cache_promo', $kode_promo);
			return redirect()->to('http://localhost:8080/order/new_order/payment');
		} else {
			$_SESSION['salah_kode_promo'] = "Maaf, anda salah memasukkan kode promo";
			$session->markAsFlashData('salah_kode_promo');
			return redirect()->to('http://localhost:8080/order/new_order/confirm_checkout');
		}
	}

	public function checkout()
	{
		if(empty(session()->get('username'))) {
			return redirect()->to(base_url('login'));
		}
		if(session()->get('username_pemilik')) {
			return view('index_pemilik');
		}	
		cache()->save('cache_jumlah', $this->request->getGet('jumlah'), 500000);
		cache()->save('cache_layanan', $this->request->getGet('layanan'), 500000);
		return redirect()->to('/order/new_order/confirm_checkout');
	}

	public function confirm_checkout()
	{
		if(empty(session()->get('username'))) {
			return redirect()->to(base_url('login'));
		}
		if(session()->get('username_pemilik')) {
			return view('index_pemilik');
		}
		return view('checkout');
	}

	public function purge_promo()
	{
		cache()->save('cache_promo', NULL);
		return redirect()->to(base_url('order/new_order/payment'));
	}

	public function payment()
	{
		$layanan = new ModelLayanan();
		$pelanggan = new ModelPelanggan();
		$promo = new ModelPromo();
		$data['layanan_dipesan'] = $layanan->peroleh_layanan(cache()->get('cache_layanan'));
		$data['pelanggan'] = $pelanggan->peroleh_pelanggan(session()->get('username'));
		if(empty(session()->get('username'))) {
			return redirect()->to(base_url('login'));
		}
		if(session()->get('username_pemilik')) {
			return view('index_pemilik');
		}
		if (cache()->get('cache_promo') != NULL) {
			$data['promo'] = $promo->peroleh_promo(cache()->get('cache_promo'));
		} 
		$data['jumlah'] = cache()->get('cache_jumlah');
		return view('payment', $data);
	}

	public function confirm_payment()
	{
		$pemesanan = new ModelPemesanan();
		$bukti_bayar = $this->request->getGet('foto_bukti');
		$id_layanan = $this->request->getGet('id_layanan');
		$id_pelanggan = $this->request->getGet('id_pelanggan');
		$jumlah = $this->request->getGet('jumlah');
		$pengurangan = $this->request->getGet('pengurangan');
		$foto_sepatu = $this->request->getGet('foto_sepatu');
		$total_harga = $this->request->getGet('total_harga');
		$tanggal_pemesanan = $this->request->getGet('tanggal_pemesanan');
		cache()->save('cache_tanggal', $tanggal_pemesanan);
		cache()->save('cache_bukti_bayar', $bukti_bayar);
		$data = [
            'id_layanan' => $id_layanan,
            'id_pelanggan' => $id_pelanggan,
            'jumlah_pasang_sepatu' => $jumlah,
            'pengurangan_harga' => $pengurangan,
            'foto_sepatu' => $foto_sepatu,
			'total_harga' => $total_harga,
			'tanggal_pemesanan' => $tanggal_pemesanan
		];
		$pemesanan->sisip_pemesanan($data);
		return redirect()->to(base_url('order/new_order/create_invoice'));
	}

	public function create_invoice()
	{
		$pemesanan = new ModelPemesanan();
		$transaksi = new ModelTransaksi();
		$data_pemesanan = $pemesanan->peroleh_pemesanan(cache()->get('cache_tanggal'));
		$id_pemesanan = $data_pemesanan['id_pemesanan'];
		$bukti_bayar = cache()->get('cache_bukti_bayar');
		$data = [
			'id_pemesanan' => $id_pemesanan,
			'bukti_pembayaran' => $bukti_bayar
		];
		$transaksi->sisip_transaksi($data);
		cache()->save('cache_jumlah', NULL);
		cache()->save('cache_layanan', NULL);
		cache()->save('cache_promo', NULL);
		cache()->save('cache_tanggal', NULL);
		cache()->save('cache_bukti_bayar', NULL);
		cache()->save('cache_id_pemesanan', $id_pemesanan);
		return redirect()->to(base_url('/order_completed'));
	}

	public function order_completed()
	{
		$data['id'] = cache()->get('cache_id_pemesanan');
		cache()->save('cache_id_pemesanan', NULL);
		return view('order_completed', $data);
	}

	public function login()
	{
		return view('login');
	}

	public function login_owner()
	{
		return view('login_owner');
	}

	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to('/');
	}

	public function status()
	{
		$pemesanan = new ModelPemesanan();
		$id = $this->request->getGet('id');
		$data['pemesanan_dicek'] = $pemesanan->peroleh_pemesanan2($id);
		return view('status', $data);
	}

	public function cancel_order()
	{
		cache()->save('cache_jumlah', NULL);
		cache()->save('cache_layanan', NULL);
		cache()->save('cache_promo', NULL);
		cache()->save('cache_tanggal', NULL);
		cache()->save('cache_bukti_bayar', NULL);
		return redirect()->to('/');
	}
	//--------------------------------------------------------------------

}
