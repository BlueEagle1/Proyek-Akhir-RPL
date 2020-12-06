<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLayanan extends Model
{
    protected $table = 'layanan';

    public function peroleh_layanan()
    {
        return $this->table('layanan')->orderBy('id_layanan', 'ASC')->get()->getResultArray();
    }

    public function sisip_layanan($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}