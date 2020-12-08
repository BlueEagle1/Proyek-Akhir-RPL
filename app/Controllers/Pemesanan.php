<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelPemesanan;

class Pemesanan extends Controller
{
    public function __construct()
    {
        $this->pemesanan = new Modelpemesanan();
    }

    public function daftar_pemesanan()
    {
        $pemesanan = new Modelpemesanan();
        $data['pemesanan'] = $pemesanan->peroleh_pemesanan();
        return view('pemesanan/daftar_pemesanan', $data);
    }
    
    public function pemesanan()
	{
        $pemesanan = new Modelpemesanan();
        $data['pemesanan'] = $pemesanan->peroleh_pemesanan();
		return view('pemesanan', $data);
	}

    public function sunting_pemesanan($id) {
        $pemesanan = new Modelpemesanan();
        $data['pemesanan'] = $pemesanan->peroleh_pemesanan2($id);
        return view('sunting_pemesanan', $data);
    }

    public function proses_sunting_pemesanan($id)
    {
        $status = $this->request->getPost('status');
        $data = [
            'status' => $status
        ];
        $this->pemesanan->sunting_pemesanan($data, $id);
        return redirect()->to('http://localhost:8080/pemesanan/daftar_pemesanan/');
    }

    public function hapus_pemesanan($nama)
    {
        $this->pemesanan->hapus_pemesanan($nama);
        return redirect()->to('http://localhost:8080/pemesanan/daftar_pemesanan/');
    }
}