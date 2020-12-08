<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPromo extends Model
{
    protected $table = 'promo';

    public function peroleh_promo($kode = false)
    {
        if ($kode === false) {
            return $this->table('promo')->orderBy('kode_promo', 'ASC')->get()->getResultArray();
        } else {
            return $this->table('promo')->where('kode_promo', $kode)->get()->getRowArray();
        }
    }

    public function sisip_promo($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function sunting_promo($data, $kode)
    {
        return $this->db->table($this->table)->update($data, ['kode_promo' => $kode]);
    }

    public function hapus_promo($kode)
    {
        return $this->db->table($this->table)->delete(['kode_promo' => $kode]);
    }
}
