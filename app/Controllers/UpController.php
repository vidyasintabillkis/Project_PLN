<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UpModel;
use CodeIgniter\HTTP\ResponseInterface;

class UpController extends BaseController
{
    public $up;
    public $validation;

    public function __construct()
    {
        $this->up = new UpModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Unit Pelaksana (UP)',
            'nama_up' => $this->up->getUP(),
        ];

        return view('up2d/up', $data);
    }

    public function tambah_up()
    {

        $data = [
            'title' => 'Tambah Data Unit Pelaksana (UP)',
        ];

        return view('up2d/tambah_up', $data);
    }

    public function simpan_up()
    {

        $rules = [
            'nama_up' => 'required|is_unique[data_up.nama_up]',
        ];

        // Set custom validation messages
        $messages = [
            'nama_up' => [
                'is_unique' => 'The name already exists. Please choose a different name.',
            ],
        ];

        $this->validation->setRules($rules, $messages);

        if ($this->validation->withRequest($this->request)->run()) {
            // Validation passed
            $data = [
                'nama_up' => $this->request->getVar('nama_up'),
            ];

            $success = $this->up->saveUP($data);

            if ($success) {
                session()->setFlashdata('message', 'Ditambahkan');
                return redirect()->to(base_url('admin/up'));
            }
        } else {
            // Validation failed
            $errors = $this->validation->getErrors();
            session()->setFlashdata('error', $errors);
            return redirect()->to(previous_url());
        }
    }

    public function edit($id)
    {
        $nama_up = $this->up->getUP($id);

        $data = [
            'title' => 'Ubah Data Unit Pelayanan (UP)',
            'nama_up' => $nama_up,
        ];

        return view('up2d/edit_up', $data);
    }

    public function update($id)
    {

        $newName = $this->request->getVar('nama_up');

        // Check if the new name is unique excluding the current record
        $isUnique = $this->up->isUniqueName($newName, $id);

        if (!$isUnique) {
            // If not unique, show an error message and redirect back
            session()->setFlashdata('error', ['nama_up' => 'The name already exists. Please choose a different name.']);
            return redirect()->to(previous_url());
        }

        // Validation passed, update the record
        $data = [
            'nama_up' => $newName,
        ];

        $success = $this->up->updateUP($data, $id);

        if ($success) {
            session()->setFlashdata('message', 'Diubah');
            return redirect()->to(base_url('admin/up'));
        }
    }

    public function hapus($id)
    {
        $success = $this->up->deleteUP($id);

        if ($success) {
            session()->setFlashdata('message', 'Dihapus');
            return redirect()->to(base_url('admin/up'));
        }
    }
}
