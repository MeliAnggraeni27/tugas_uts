<?php

namespace App\Controllers;

use App\Models\StaffModel;
use CodeIgniter\Controller;

class Staff extends Controller
{
    public function index()
    {
        $model = new StaffModel();
        $data['staff'] = $model->findAll();
        echo view('layout/header');
        echo view('layout/lib');
        echo view('layout/sidebar');
        echo view('staff/index', $data);
        echo view('layout/footer');
    }

    public function create()
    {
        return view('staff/create');
    }

    public function store()
    {
        $model = new StaffModel();
        $data = [
            'nama_staff' => $this->request->getPost('nama_staff'),
            'bagian_staff' => $this->request->getPost('bagian_staff'),
            'notlp_staff' => $this->request->getPost('notlp_staff')
        ];
        $model->insert($data);
        return redirect()->to('/staff');
    }

    public function edit($id = null)
    {
        $model = new StaffModel();
        $data['staff'] = $model->find($id);
        echo view('layout/header');
        echo view('layout/lib');
        echo view('layout/sidebar');
        echo view('staff/edit', $data);
        echo view('layout/footer');
    }

    public function update()
    {
        $model = new StaffModel();
        $id = $this->request->getPost('id');
        $data = [
            'nama_staff' => $this->request->getPost('nama_staff'),
            'bagian_staff' => $this->request->getPost('bagian_staff'),
            'notlp_staff' => $this->request->getPost('notlp_staff')
        ];
        $model->update($id, $data);
        return redirect()->to('/staff');
    }

    public function delete($id = null)
    {
        $model = new StaffModel();
        $model->delete($id);
        return redirect()->to('/staff');
    }
}
