<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PostModel;
use CodeIgniter\Exceptions\PageNotFoundException;


class PostAdmin extends BaseController
{
    //--------------------------------------------------------------------------

    public function index()
    {
        $postModel = new PostModel();
        $data['posts'] = $postModel->findAll();
        echo view('admin/admin_post_list', $data);
    }

    //--------------------------------------------------------------------------

    public function preview($id)
    {
        $postModel = new PostModel();
        $data['post'] = $postModel->where('id', $id)->first();
        if (!$data['post']) {
            throw PageNotFoundException::forPageNotFound();
        }
        echo view('post_detail', $data);
    }

    //--------------------------------------------------------------------------

    public function create()
    {
        // lakukan validasi
        $validation = \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'content' => 'required',
            'status' => 'required'
        ]);

        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if ($isDataValid) {
            $postModel = new PostModel();
            $postModel->insert([
                'title' => $this->request->getPost('title'),
                'content' => $this->request->getPost('content'),
                'status' => $this->request->getPost('status'),
                'slug' => url_title($this->request->getPost('title'), '-', TRUE)
            ]);

            return redirect()->to('admin/post');
        }

        // tampilkan form create
        echo view('admin/admin_post_create');
    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $postModel = new PostModel();
        $data['post'] = $postModel->where('id', $id)->first();

        // lakukan validasi data artikel
        $validation = \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'status' => 'required'
        ]);

        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, maka simpan ke database
        if ($isDataValid) {
            $postModel->update($id, [
                'title' => $this->request->getPost('title'),
                'content' => $this->request->getPost('content'),
                'status' => $this->request->getPost('status')
            ]);
            return redirect()->to('admin/post');
        }

        // tampilkan form edit
        echo view('admin/admin_post_update', $data);
    }

    //--------------------------------------------------------------------------

    public function delete($id)
    {
        $postModel = new PostModel();
        $postModel->delete($id);
        return redirect()->to('admin/post');
    }
}

