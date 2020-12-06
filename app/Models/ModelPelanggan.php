<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPelanggan extends Model
{
    protected $table = "pelanggan";

    public function peroleh_pelanggan($username)
    {
        return $this->table('pelanggan')->where('username', $username)->get()->getRowArray();
    }

    public function sisip_pelanggan($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}
