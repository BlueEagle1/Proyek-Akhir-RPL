<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelLayanan;
use App\Models\ModelPromo;

class Promo extends Controller
{
    public function __construct()
    {
        $this->promo = new ModelPromo();
    }

    public function promo()
    {
        $promo = new ModelPromo();
        $data['promo'] = $promo->peroleh_promo();
        return view('promo', $data);
    }

    public function daftar_promo()
    {
        $promo = new ModelPromo();
        $data['promo'] = $promo->peroleh_promo();
        return view('promo/daftar_promo', $data);
    }

    public function tambah_promo()
	{
        $layanan = new ModelLayanan();
        $data['layanan'] = $layanan->peroleh_layanan();
		return view('tambah_promo', $data);
    }
    
    public function proses_tambah_promo()
    {
        helper(['form', 'url']);
        $input = $this->validate([
            'kode_promo' => 'required|is_unique[promo.kode_promo]',
            'id_layanan' => 'required',
            'opsi_pengurangan' => 'required',
            'pengurangan' => 'required'
        ]);
        if (!$input) {
            return redirect()->to('promo/tambah_promo/');
        }
        $kode_promo = $this->request->getPost('kode_promo');
        $id_layanan = $this->request->getPost('id_layanan');
        $opsi_pengurangan = $this->request->getPost('opsi_pengurangan');
        $pengurangan = $this->request->getPost('pengurangan');
        $judul_artikel = $this->request->getPost('judul_artikel');
        $isi_artikel = $this->request->getPost('isi_artikel');
        $data = [
            'kode_promo' => $kode_promo,
            'id_layanan' => $id_layanan,
            'opsi_pengurangan' => $opsi_pengurangan,
            'pengurangan' => $pengurangan,
            'judul_artikel' => $judul_artikel,
            'isi_artikel' => $isi_artikel
        ];
        $this->promo->sisip_promo($data);
        return redirect()->to('http://localhost:8080/promo/daftar_promo/');
    }

    public function sunting_promo($kode)
    {
        $layanan = new ModelLayanan();
        $data['layanan'] = $layanan->peroleh_layanan();
        $promo = new ModelPromo();
        $data['promo'] = $promo->peroleh_promo($kode);
        return view('sunting_promo', $data);
    }

    public function proses_sunting_promo($kode)
    {
        $kode_promo = $this->request->getPost('kode_promo');
        $id_layanan = $this->request->getPost('id_layanan');
        $opsi_pengurangan = $this->request->getPost('opsi_pengurangan');
        $pengurangan = $this->request->getPost('pengurangan');
        $judul_artikel = $this->request->getPost('judul_artikel');
        $isi_artikel = $this->request->getPost('isi_artikel');
        $data = [
            'kode_promo' => $kode_promo,
            'id_layanan' => $id_layanan,
            'opsi_pengurangan' => $opsi_pengurangan,
            'pengurangan' => $pengurangan,
            'judul_artikel' => $judul_artikel,
            'isi_artikel' => $isi_artikel
        ];
        $this->promo->sunting_promo($data, $kode);
        return redirect()->to('http://localhost:8080/promo/daftar_promo/');
    }

    public function hapus_promo($kode)
    {
        $this->promo->hapus_promo($kode);
        return redirect()->to('http://localhost:8080/promo/daftar_promo/');
    }
}
