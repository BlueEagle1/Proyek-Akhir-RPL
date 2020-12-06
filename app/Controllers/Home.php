<?php namespace App\Controllers;

use App\Models\ModelLayanan;

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

	public function daftar_layanan()
	{
		$layanan = new ModelLayanan();
		$data['layanan'] = $layanan->peroleh_layanan();
		return view('daftar_layanan', $data);
	}

	public function tambah_layanan()
	{
		return view('tambah_layanan');
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
		if(empty(session()->get('username'))) {
			return redirect()->to(base_url('login'));
		}
		if(session()->get('username_pemilik')) {
			return view('index_pemilik');
		}
		return view('new_order');
	}

	public function checkout()
	{
		if(empty(session()->get('username'))) {
			return redirect()->to(base_url('login'));
		}
		if(session()->get('username_pemilik')) {
			return view('index_pemilik');
		}
		cache()->save('cache_foto', $this->request->getGet('berkas-yang-diunggah'), 500000);
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
		if (empty(cache()->get('cache_foto'))){
			return redirect()->to('/order/new_order/');
		}
		$data = array(
			'foto' => cache()->get('cache_foto'),
			'jumlah' => cache()->get('cache_jumlah'),
			'layanan' => cache()->get('cache_layanan')
		);
		return view('checkout', $data);
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

	//--------------------------------------------------------------------

}
