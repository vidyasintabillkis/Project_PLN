<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UpModel;
use CodeIgniter\HTTP\ResponseInterface;

class UpController extends BaseController
{
    public $up;

    public function __construct()
    {
        $this->up = new UpModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Unit Pelaksana (UP)',
            'nama_up' => $this->up->getUP(),
        ];

        return view('up2d/up', $data);
    }

    // public function tambah_up()
    // {

    //     $data = [
    //         'title' => 'Tambah Data Unit Pelaksana (UP)',
    //     ];

    //     return view('admin/tambah_unit', $data);
    // }

    // public function store()
    // {
    //     $this->up->saveUP([
    //         'nama_up' => $this->request->getVar('nama_up'),
    //     ]);

    //     return redirect()->to(base_url('/up2d/admin'));
    // }

    // public function edit($id)
    // {
    //     $nama_up = $this->up->getUP($id);

    //     $data = [
    //         'title' => 'Ubah Data Unit Pelayanan (UP)',
    //         'nama_up' => $nama_up,
    //     ];

    //     return view('admin/edit_unit', $data);
    // }

    // public function update($id)
    // {

    //     $data = [
    //         'nama_up' => $this->request->getVar('nama_up')
    //     ];

    //     $result = $this->up->updateLokasi($data, $id);

    //     if (!$result) {
    //         return redirect()->back()->withInput()
    //             ->with('error', 'Gagal menyimpan data');
    //     }

    //     return redirect()->to(base_url('/admin/unit'));
    // }


    // public function hapus($id)
    // {
    //     $this->up->deleteUP($id);

    //     return redirect('up2d/unit')->with('Berhasil', 'Data Berhasil Dihapus');
    // }
}
