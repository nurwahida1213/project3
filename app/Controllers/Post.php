<?php

namespace App\Controllers;

use App\Models\PostModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Post extends BaseController
{
    public function index()
    {
        // Buat object model $post
        $post = new PostModel();

        // Siapkan data untuk dikirim ke view dengan nama $posts dan isi datanya dengan post yang sudah terbit
        $data['posts'] = $post->where('status', 'published')->findAll();

        // Kirim data ke view
        echo view('post', $data);
    }

    //------------------------------------------------------------
    public function viewPost($slug)
    {
        // Buat object model $post
        $post = new PostModel();

        // Siapkan data untuk dikirim ke view dengan nama $post dan cari post berdasarkan slug dan status
        $data['post'] = $post->where([
            'slug' => $slug,
            'status' => 'published'
        ])->first();

        // Tampilkan 404 error jika data tidak ditemukan
        if (!$data['post']) {
            throw PageNotFoundException::forPageNotFound();
        }

        // Kirim data ke view
        echo view('post_detail', $data);
    }
}

