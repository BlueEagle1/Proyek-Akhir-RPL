<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTransaksi extends Model
{
    protected $table = 'transaksi';

    public function peroleh_transaksi($id = false)
    {
        if ($id === false) {
            return $this->table('transaksi')->orderBy('id_invoice', 'ASC')->get()->getResultArray();
        } else {
            return $this->table('transaksi')->where('id_invoice', $id)->get()->getRowArray();
        }
    }

    public function sisip_transaksi($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function sunting_transaksi($data, $kode)
    {
        return $this->db->table($this->table)->update($data, ['id_invoice' => $kode]);
    }

    public function hapus_transaksi($kode)
    {
        return $this->db->table($this->table)->delete(['id_invoice' => $kode]);
    }
}
