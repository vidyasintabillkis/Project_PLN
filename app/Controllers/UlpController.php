<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UlpModel;
use App\Models\UpModel;
use CodeIgniter\HTTP\ResponseInterface;

class UlpController extends BaseController
{
    public $ulp;
    public $up;
    public $validation;

    public function __construct()
    {
        $this->up = new UpModel();
        $this->ulp = new UlpModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Unit Layanan Pelanggan (ULP)',
            'ulp' => $this->ulp->getULP(),
        ];

        return view('up2d/ulp', $data);
    }

    public function tambah_ulp()
    {
        $up = $this->up->getUP();

        $data = [
            'title' => 'Tambah Data Unit Layanan Pelanggan (ULP)',
            'up' => $up,
        ];

        return view('up2d/tambah_ulp', $data);
    }

    public function simpan_ulp()
    {

        $data = [
            'id_up' => $this->request->getVar('nama_up'),
            'nama_ulp' => $this->request->getVar('nama_ulp'),
        ];

        $success = $this->ulp->saveULP($data);

        if ($success) {
            session()->setFlashdata('message', 'Ditambahkan');
            return redirect()->to(base_url('admin/ulp'));
        }
    }

    public function edit($id)
    {
        $ulp = $this->ulp->getULP($id);
        $up = $this->up->getUP();

        $data = [
            'title' => 'Ubah Data Unit Pelayanan (UP)',
            'ulp' => $ulp,
            'up' => $up
        ];

        return view('up2d/edit_ulp', $data);
    }

    public function update($id){

        $data = [
            'id_up' => $this->request->getVar('nama_up'),
            'nama_ulp' => $this->request->getVar('nama_ulp'),
        ]; 

        $success = $this->ulp->updateULP($data, $id);

        if ($success) {
            session()->setFlashdata('message', 'Diubah');
            return redirect()->to(base_url('admin/ulp'));
        }
    }


    public function hapus($id)
    {
        $success = $this->ulp->deleteULP($id);

        if ($success) {
            session()->setFlashdata('message', 'Dihapus');
            return redirect()->to(base_url('admin/ulp'));
        }
    }
}
