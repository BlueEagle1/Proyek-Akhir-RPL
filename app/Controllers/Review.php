<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelReview;

class Review extends Controller
{
    public function __construct()
    {
        $this->review = new ModelReview();
    }

    public function daftar_review()
    {
        $review = new ModelReview();
        $data['review'] = $review->peroleh_review();
        return view('review/daftar_review', $data);
    }
    
    public function review()
	{
        $review = new ModelReview();
        $data['review'] = $review->peroleh_review();
		return view('review', $data);
	}

    public function sisip_review() {
        $nama_pelanggan = $this->request->getPost('name');
        $komen_pelanggan = $this->request->getPost('comment');
        $data = [
            'nama_pelanggan' => $nama_pelanggan,
            'komen_pelanggan' => $komen_pelanggan
        ];
        $this->review->sisip_review($data);
        return redirect()->to('http://localhost:8080/review/review');
    }

    public function lihat_review($nama) {
        $review = new ModelReview();
        $data['review'] = $review->peroleh_review($nama);
        return view('lihat_review', $data);
    }

    public function hapus_review($nama)
    {
        $this->review->hapus_review($nama);
        return redirect()->to('http://localhost:8080/review/daftar_review/');
    }
}