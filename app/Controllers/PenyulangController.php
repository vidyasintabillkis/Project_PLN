<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GiModel;
use App\Models\PenyulangModel;
use CodeIgniter\HTTP\ResponseInterface;

class PenyulangController extends BaseController
{
    public $gi;
    public $penyulang;
    public $validation;

    public function __construct()
    {
        $this->gi = new GiModel();
        $this->penyulang = new PenyulangModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Penyulang',
            'penyulang' => $this->penyulang->getPenyulang(),
        ];

        return view('up2d/penyulang', $data);
    }

    public function tambah()
    {
        $gi = $this->gi->getGI();

        $data = [
            'title' => 'Tambah Data Penyulang',
            'gi' => $gi,
        ];

        return view('up2d/tambah_penyulang', $data);
    }

    public function simpan()
    {

        $data = [
            'id_gardu_induk' => $this->request->getVar('nama_gardu_induk'),
            'nama_penyulang_lama' => $this->request->getVar('nama_penyulang_lama'),
            'nama_penyulang_baru' => $this->request->getVar('nama_penyulang_baru'),
            'kapasitas_trafo' => $this->request->getVar('kapasitas_trafo'),
        ];

        $success = $this->penyulang->savePenyulang($data);

        if ($success) {
            session()->setFlashdata('message', 'Ditambahkan');
            return redirect()->to(base_url('admin/penyulang'));
        }
    }

    public function edit($id)
    {
        
        $penyulang = $this->penyulang->getPenyulang($id);
        $gi = $this->gi->getGI();

        $data = [
            'title' => 'Ubah Data Penyulang',
            'penyulang' => $penyulang,
            'gi' => $gi
        ];

        return view('up2d/edit_penyulang', $data);
    }

    public function update($id){

        $data = [
            'id_gardu_induk' => $this->request->getVar('nama_gardu_induk'),
            'nama_penyulang_lama' => $this->request->getVar('nama_penyulang_lama'),
            'nama_penyulang_baru' => $this->request->getVar('nama_penyulang_baru'),
            'kapasitas_trafo' => $this->request->getVar('kapasitas_trafo'),
        ]; 

        $success = $this->penyulang->updatePenyulang($data, $id);

        if ($success) {
            session()->setFlashdata('message', 'Diubah');
            return redirect()->to(base_url('admin/penyulang'));
        }
    }

    public function hapus($id)
    {
        $success = $this->penyulang->deletePenyulang($id);

        if ($success) {
            session()->setFlashdata('message', 'Dihapus');
            return redirect()->to(base_url('admin/penyulang'));
        }
    }
}

