<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelTransaksi;

class Transaksi extends Controller
{
    public function __construct()
    {
        $this->transaksi = new ModelTransaksi();
    }

    public function daftar_transaksi()
    {
        $transaksi = new ModelTransaksi();
        $data['transaksi'] = $transaksi->peroleh_transaksi();
        return view('transaksi/daftar_transaksi', $data);
    }
    
    public function transaksi()
	{
        $transaksi = new ModelTransaksi();
        $data['transaksi'] = $transaksi->peroleh_transaksi();
		return view('transaksi', $data);
	}

    public function lihat_transaksi($id) {
        $transaksi = new ModelTransaksi();
        $data['transaksi'] = $transaksi->peroleh_transaksi($id);
        return view('lihat_transaksi', $data);
    }
}