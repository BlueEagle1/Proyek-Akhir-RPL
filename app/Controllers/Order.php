<?php

namespace App\Controllers;

use App\Models\ModelLayanan;
use App\Models\ModelPelanggan;
use App\Models\ModelPemesanan;
use App\Models\ModelPromo;
use App\Models\ModelTransaksi;
use CodeIgniter\Controller;

class Order extends Controller
{
    public function payment()
    {
        $layanan = new ModelLayanan();
        $pelanggan = new ModelPelanggan();
        $promo = new ModelPromo();
        $data['layanan_dipesan'] = $layanan->peroleh_layanan(cache()->get('cache_layanan'));
        $data['pelanggan'] = $pelanggan->peroleh_pelanggan(session()->get('username'));
        if (empty(session()->get('username'))) {
            return redirect()->to(base_url('login'));
        }
        if (session()->get('username_pemilik')) {
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
        helper('form');
        $pemesanan = new ModelPemesanan();
        $id_layanan = $this->request->getPost('id_layanan');
        $id_pelanggan = $this->request->getPost('id_pelanggan');
        $jumlah = $this->request->getPost('jumlah');
        $pengurangan = $this->request->getPost('pengurangan');
        $total_harga = $this->request->getPost('total_harga');
        cache()->save('cache_total_harga', $total_harga);
        $tanggal_pemesanan = $this->request->getPost('tanggal_pemesanan');
        cache()->save('cache_tanggal', $tanggal_pemesanan);
        $validasi = $this->validate([
            'foto_sepatu' => 'uploaded[foto_sepatu]',
            'foto_bukti' => 'uploaded[foto_bukti]'
        ]);
        if ($validasi) {
            $foto_sepatu = $this->request->getFile('foto_sepatu');
            $foto_sepatu->move(ROOTPATH . '/public/unggahan');
            $data = [
                'id_layanan' => $id_layanan,
                'id_pelanggan' => $id_pelanggan,
                'jumlah_pasang_sepatu' => $jumlah,
                'pengurangan_harga' => $pengurangan,
                'foto_sepatu' => $foto_sepatu->getName(),
                'total_harga' => $total_harga,
                'tanggal_pemesanan' => $tanggal_pemesanan
            ];
            $pemesanan->sisip_pemesanan($data);
            $bukti_bayar = $this->request->getFile('foto_bukti');
            $bukti_bayar->move(ROOTPATH . '/public/unggahan');
            $pemesanan = new ModelPemesanan();
            $transaksi = new ModelTransaksi();
            $data_pemesanan = $pemesanan->peroleh_pemesanan(cache()->get('cache_tanggal'));
            $id_pemesanan = $data_pemesanan['id_pemesanan'];
            $data = [
                'id_pemesanan' => $id_pemesanan,
                'bukti_pembayaran' => $bukti_bayar->getName()
            ];
            $transaksi->sisip_transaksi($data);
            cache()->save('cache_jumlah', NULL);
            cache()->save('cache_layanan', NULL);
            cache()->save('cache_promo', NULL);
            cache()->save('cache_tanggal', NULL);
            cache()->save('cache_total_harga', NULL);
            cache()->save('cache_id_pemesanan', $id_pemesanan);
            return redirect()->to(base_url('/order_completed'));
        }
    }
}
