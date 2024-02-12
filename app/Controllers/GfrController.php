<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GfrModel;
use App\Models\RelayModel;
use CodeIgniter\HTTP\ResponseInterface;

class GfrController extends BaseController
{
    public $relay;
    public $gfr;
    public $validation;
    // protected $db, $builder;

    public function __construct()
    {
        $this->relay = new RelayModel();
        $this->gfr = new GfrModel();
        $this->validation = \Config\Services::validation();
    }
    
    public function index()
    {
        $data = [
            'title' => 'Data Setting Proteksi GFR',
            'gfr' => $this->gfr->getGFR(),
        ];

        return view('up2d/gfr', $data);
    }

    public function tambah()
    {
        $relay = $this->relay->getRelay();

        $data = [
            'title' => 'Tambah Data Setting Proteksi GFR',
            'relay' => $relay
        ];

        return view('up2d/tambah_gfr', $data);
    }

    public function simpan()
    {

        $data = [
            'id_relay' => $this->request->getVar('nama_keypoint'),
            'gfr_arus_1' => $this->request->getVar('gfr_arus_1'),
            'gfr_tms' => $this->request->getVar('gfr_tms'),
            'gfr_curva_1' => $this->request->getVar('gfr_curva_1'),
            'gfr_arus_2' => $this->request->getVar('gfr_arus_2'),
            'gfr_td' => $this->request->getVar('gfr_td'),
            'gfr_curva_2' => $this->request->getVar('gfr_curva_2'),
            'gfr_arus_3' => $this->request->getVar('gfr_arus_3'),
            'gfr_delay' => $this->request->getVar('gfr_delay'),
            'gfr_curva_3' => $this->request->getVar('gfr_curva_3'),
        ];

        $success = $this->gfr->saveGFR($data);

        if ($success) {
            session()->setFlashdata('message', 'Ditambahkan');
            return redirect()->to(base_url('admin/gfr'));
        }
    }

    public function hapus($id)
    {
        $success = $this->gfr->deleteGFR($id);

        if ($success) {
            session()->setFlashdata('message', 'Dihapus');
            return redirect()->to(base_url('admin/gfr'));
        }
    }

    public function edit($id)
    {
        
        $gfr = $this->gfr->getGFR($id);
        $relay = $this->relay->getRelay();

        $data = [
            'title' => 'Ubah Data Setting Proteksi GFR',
            'relay' => $relay,
            'gfr' => $gfr,
        ];

        return view('up2d/edit_gfr', $data);
    }

    public function update($id){

        $data = [
            'id_relay' => $this->request->getVar('nama_keypoint'),
            'gfr_arus_1' => $this->request->getVar('gfr_arus_1'),
            'gfr_tms' => $this->request->getVar('gfr_tms'),
            'gfr_curva_1' => $this->request->getVar('gfr_curva_1'),
            'gfr_arus_2' => $this->request->getVar('gfr_arus_2'),
            'gfr_td' => $this->request->getVar('gfr_td'),
            'gfr_curva_2' => $this->request->getVar('gfr_curva_2'),
            'gfr_arus_3' => $this->request->getVar('gfr_arus_3'),
            'gfr_delay' => $this->request->getVar('gfr_delay'),
            'gfr_curva_3' => $this->request->getVar('gfr_curva_3'),
        ];

        $success = $this->gfr->updateGFR($data, $id);

        if ($success) {
            session()->setFlashdata('message', 'Diubah');
            return redirect()->to(base_url('admin/gfr'));
        }
    }
}
