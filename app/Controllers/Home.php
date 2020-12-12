<?php

namespace App\Controllers;

use App\Models\ModelLayanan;
use App\Models\ModelPelanggan;
use App\Models\ModelPemesanan;
use App\Models\ModelPromo;
use App\Models\ModelTransaksi;

class Home extends BaseController
{
	public function index()
	{
		if (session()->get('username_pemilik')) {
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
		if (empty(session()->get('username'))) {
			return redirect()->to(base_url('login'));
		}
		if (session()->get('username_pemilik')) {
			return view('index_pemilik');
		}
		return view('order');
	}

	public function check()
	{
		if (empty(session()->get('username'))) {
			return redirect()->to(base_url('login'));
		}
		if (session()->get('username_pemilik')) {
			return view('index_pemilik');
		}
		return view('check');
	}

	public function new_order()
	{
		$layanan = new ModelLayanan();
		if (empty(session()->get('username'))) {
			return redirect()->to(base_url('login'));
		}
		if (session()->get('username_pemilik')) {
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
		$layanan = new ModelLayanan();
		if (empty(session()->get('username'))) {
			return redirect()->to(base_url('login'));
		}
		if (session()->get('username_pemilik')) {
			return view('index_pemilik');
		}
		$data['promo'] = $promo->peroleh_promo($kode_promo);
		$data_layanan = $layanan->peroleh_layanan(cache()->get('cache_layanan'));
		if (!empty($data['promo'])) {
			if ($data['promo']['id_layanan'] == $data_layanan['id_layanan']) {
				cache()->save('cache_promo', $kode_promo);
				return redirect()->to('http://localhost:8080/order/payment');
			} else {
				$_SESSION['salah_layanan'] = "Maaf, anda salah memilih layanan dengan kode promo ini";
				$session->markAsFlashData('salah_layanan');
				return redirect()->to('http://localhost:8080/order/new_order/confirm_checkout');
			}
		} else {
			$_SESSION['salah_kode_promo'] = "Maaf, anda salah memasukkan kode promo";
			$session->markAsFlashData('salah_kode_promo');
			return redirect()->to('http://localhost:8080/order/new_order/confirm_checkout');
		}
	}

	public function checkout()
	{
		if (empty(session()->get('username'))) {
			return redirect()->to(base_url('login'));
		}
		if (session()->get('username_pemilik')) {
			return view('index_pemilik');
		}
		cache()->save('cache_jumlah', $this->request->getGet('jumlah'), 500000);
		cache()->save('cache_layanan', $this->request->getGet('layanan'), 500000);
		return redirect()->to('/order/new_order/confirm_checkout');
	}

	public function confirm_checkout()
	{
		if (empty(session()->get('username'))) {
			return redirect()->to(base_url('login'));
		}
		if (session()->get('username_pemilik')) {
			return view('index_pemilik');
		}
		return view('checkout');
	}

	public function purge_promo()
	{
		cache()->save('cache_promo', NULL);
		return redirect()->to(base_url('order/payment'));
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
		cache()->save('cache_total_harga', NULL);
		return redirect()->to('/');
	}
	//--------------------------------------------------------------------

}
