<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelReview extends Model
{
    protected $table = 'review';

    public function peroleh_review($nama = false)
    {
        if ($nama === false) {
            return $this->table('review')->get()->getResultArray();
        } else {
            return $this->table('review')->where('nama_pelanggan', $nama)->get()->getRowArray();
        }
    }

    public function sisip_review($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function hapus_review($nama)
    {
        return $this->db->table($this->table)->delete(['nama_pelanggan' => $nama]);
    }
}