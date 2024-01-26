<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GiModel;
use CodeIgniter\HTTP\ResponseInterface;

class GiController extends BaseController
{
    public $gi;
    public $validation;

    public function __construct()
    {
        $this->gi = new GiModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Gardu Induk (GI)',
            'gi' => $this->gi->getGI(),
        ];

        return view('up2d/gi', $data);
    }

    public function tambah_gi()
    {

        $data = [
            'title' => 'Tambah Data Gardu Induk (GI)',
        ];

        return view('up2d/tambah_gi', $data);
    }

    public function simpan_gi()
    {

        $data = [
            'nama_gardu_induk' => $this->request->getVar('nama_gardu_induk'),
        ];

        $success = $this->gi->saveGI($data);

        if ($success) {
            session()->setFlashdata('message', 'Ditambahkan');
            return redirect()->to(base_url('admin/gi'));
        }
    }

    public function edit($id)
    {
        $gi = $this->gi->getGi($id);

        $data = [
            'title' => 'Ubah Data Gardu Induk (GI)',
            'gi' => $gi,
        ];

        return view('up2d/edit_gi', $data);
    }

    public function update($id)
    {

        $data = [
            'nama_gardu_induk' => $this->request->getVar('nama_gardu_induk'),
        ];

        $success = $this->gi->updateGI($data, $id);

        if ($success) {
            session()->setFlashdata('message', 'Diubah');
            return redirect()->to(base_url('admin/gi'));
        }
    }

    public function hapus($id)
    {
        $success = $this->gi->deleteGI($id);

        if ($success) {
            session()->setFlashdata('message', 'Dihapus');
            return redirect()->to(base_url('admin/gi'));
        }
    }
}
