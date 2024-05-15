<?php

namespace App\Controllers;

use App\Models\DosenModel;
use CodeIgniter\Controller;

class Dosen extends Controller
{
    public function index()
    {
        $model = new DosenModel();
        $data['dosen'] = $model->findAll();
        echo view('layout/header');
        echo view('layout/lib');
        echo view('layout/sidebar');
        echo view('dosen/index', $data);
        echo view('layout/footer');
    }

    public function create()
    {
        return view('dosen/create');
    }

    public function store()
    {
        $model = new DosenModel();
        $data = [
            'nama_dosen' => $this->request->getPost('nama_dosen'),
            'matkul_dosen' => $this->request->getPost('matkul_dosen'),
            'alamat_dosen' => $this->request->getPost('alamat_dosen')
        ];
        $model->insert($data);
        return redirect()->to('/dosen');
    }

    public function edit($id = null)
    {
        $model = new DosenModel();
        $data['dosen'] = $model->find($id);
        echo view('layout/header');
        echo view('layout/lib');
        echo view('layout/sidebar');
        echo view('dosen/index', $data);
        echo view('layout/footer');
    }

    public function update()
    {
        $model = new DosenModel();
        $id = $this->request->getPost('id');
        $data = [
            'nama_dosen' => $this->request->getPost('nama_dosen'),
            'matkul_dosen' => $this->request->getPost('matkul_dosen'),
            'alamat_dosen' => $this->request->getPost('alamat_dosen')
        ];
        $model->update($id, $data);
        return redirect()->to('/dosen');
    }

    public function delete($id = null)
    {
        $model = new DosenModel();
        $model->delete($id);
        return redirect()->to('/dosen');
    }
}
