<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPemilik extends Model
{
    protected $table = "pemilik";

    public function peroleh_pemilik($username)
    {
        return $this->table('pemilik')->where('username', $username)->get()->getRowArray();
    }
}
