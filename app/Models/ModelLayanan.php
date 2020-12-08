<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLayanan extends Model
{
    protected $table = 'layanan';

    public function peroleh_layanan($id = false)
    {
        if ($id === false){
            return $this->table('layanan')->orderBy('id_layanan', 'ASC')->get()->getResultArray();
        }
        else {
            return $this->table('layanan')->where('id_layanan', $id)->get()->getRowArray();
        }
    }

    public function sisip_layanan($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function edit_layanan($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_layanan' => $id]);
    }

    public function hapus_layanan($id)
    {
        return $this->db->table($this->table)->delete(['id_layanan' => $id]);
    }
}