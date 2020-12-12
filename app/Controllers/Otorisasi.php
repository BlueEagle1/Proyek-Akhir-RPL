<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelPelanggan;
use App\Models\ModelPemilik;

class Otorisasi extends Controller
{

    public function __construct()
    {
        $this->pelanggan = new ModelPelanggan();
        $this->pemilik = new ModelPemilik();
    }

    public function daftar()
    {
        helper(['form', 'url']);
        $input = $this->validate([
            'username' => 'required|is_unique[pelanggan.username]',
            'email' => 'required|valid_email|is_unique[pelanggan.email]',
            'password' => 'required',
            'conf_password' => 'required|matches[password]',
            'address' => 'required',
            'phone_number' => 'required'
        ]);
        if (!$input) {
            return redirect()->to('/login/');
        }
        $username = $this->request->getPost('username');
        $no_hp = $this->request->getPost('phone_number');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $alamat_rumah = $this->request->getPost('address');
        $data = [
            'id_pelanggan' => NULL,
            'username' => $username,
            'no_hp' => $no_hp,
            'email' => $email,
            'password' => $password,
            'alamat_rumah' => $alamat_rumah
        ];
        $this->pelanggan->sisip_pelanggan($data);
        return redirect()->to('/login/');
    }

    public function masuk()
    {
        $session = session();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $data = $this->pelanggan->peroleh_pelanggan($username);
        if (!empty($data)) {
            $pass = $data['password'];
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $verify_pass = password_verify($password, $hash);
            if ($verify_pass) {
                $session->set('username', $username);
                return redirect()->to('/');
            } else {
                $_SESSION['salah_password'] = "Maaf, password anda yang masukkan salah";
                $session->markAsFlashData('salah_password');
                return redirect()->to('/login/');
            }
        } else {
            $_SESSION['username_tidak_terdaftar'] = "Maaf, username tidak terdaftar dalam sistem";
            $session->markAsFlashData('username_tidak_terdaftar');
            return redirect()->to('/login/');
        }
    }

    public function masuk_pemilik()
    {
        $session = session();
        $username_pemilik = $this->request->getPost('username');
        $password_pemilik = $this->request->getPost('password');
        $data = $this->pemilik->peroleh_pemilik($username_pemilik);
        if (!empty($data))
        {
            $pass = $data['password'];
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $verify_pass = password_verify($password_pemilik, $hash);
            if ($verify_pass) {
                $session->set('username_pemilik', $username_pemilik);
                return redirect()->to('/');
            } else {
                $_SESSION['salah_password'] = "Maaf, password anda yang masukkan salah";
                $session->markAsFlashData('salah_password');
                return redirect()->to('/login_owner/');
            }
        }
        else {
            $_SESSION['username_tidak_terdaftar'] = "Maaf, username tidak terdaftar dalam sistem";
            $session->markAsFlashData('username_tidak_terdaftar');
            return redirect()->to('/login_owner/');
        }
    }
}
