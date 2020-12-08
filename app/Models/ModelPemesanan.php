<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPemesanan extends Model
{
    protected $table = 'pemesanan';

    public function peroleh_pemesanan($datetime = false)
    {
        if ($datetime === false) {
            return $this->table('pemesanan')->orderBy('id_pemesanan', 'ASC')->get()->getResultArray();
        } else {
            return $this->table('pemesanan')->where('tanggal_pemesanan', $datetime)->get()->getRowArray();
        }
    }

    public function peroleh_pemesanan2($id = false)
    {
        if ($id === false) {
            return $this->table('pemesanan')->orderBy('id_pemesanan', 'ASC')->get()->getResultArray();
        } else {
            return $this->table('pemesanan')->where('id_pemesanan', $id)->get()->getRowArray();
        }
    }

    public function sisip_pemesanan($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function sunting_pemesanan($data, $kode)
    {
        return $this->db->table($this->table)->update($data, ['id_pemesanan' => $kode]);
    }

    public function hapus_pemesanan($kode)
    {
        return $this->db->table($this->table)->delete(['id_pemesanan' => $kode]);
    }
}
