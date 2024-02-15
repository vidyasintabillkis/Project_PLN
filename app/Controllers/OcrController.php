<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OcrModel;
use App\Models\RelayModel;
use CodeIgniter\HTTP\ResponseInterface;

class OcrController extends BaseController
{
    public $relay;
    public $ocr;
    public $validation;
    // protected $db, $builder;

    public function __construct()
    {
        $this->relay = new RelayModel();
        $this->ocr = new OcrModel();
        $this->validation = \Config\Services::validation();
    }
    
    public function index()
    {
        $data = [
            'title' => 'Data Setting Proteksi OCR',
            'ocr' => $this->ocr->getOCR(),
        ];

        return view('up2d/ocr', $data);
    }

    public function tambah()
    {
        $relay = $this->relay->getRelay();

        $data = [
            'title' => 'Tambah Data Setting Proteksi OCR',
            'relay' => $relay
        ];

        return view('up2d/tambah_ocr', $data);
    }

    public function simpan()
    {

        $data = [
            'id_relay' => $this->request->getVar('nama_keypoint'),
            'ocr_arus_1' => $this->request->getVar('ocr_arus_1'),
            'ocr_tms' => $this->request->getVar('ocr_tms'),
            'ocr_curva_1' => $this->request->getVar('ocr_curva_1'),
            'ocr_arus_2' => $this->request->getVar('ocr_arus_2'),
            'ocr_td' => $this->request->getVar('ocr_td'),
            'ocr_curva_2' => $this->request->getVar('ocr_curva_2'),
            'ocr_arus_3' => $this->request->getVar('ocr_arus_3'),
            'ocr_delay' => $this->request->getVar('ocr_delay'),
            'ocr_curva_3' => $this->request->getVar('ocr_curva_3'),
        ];

        $success = $this->ocr->saveOCR($data);

        if ($success) {
            session()->setFlashdata('message', 'Ditambahkan');
            return redirect()->to(base_url('admin/ocr'));
        }
    }

    public function hapus($id)
    {
        $success = $this->ocr->deleteOCR($id);

        if ($success) {
            session()->setFlashdata('message', 'Dihapus');
            return redirect()->to(base_url('admin/ocr'));
        }
    }

    public function edit($id)
    {
        
        $ocr = $this->ocr->getOCR($id);
        $relay = $this->relay->getRelay();

        $data = [
            'title' => 'Ubah Data Setting Proteksi OCR',
            'relay' => $relay,
            'ocr' => $ocr,
        ];

        return view('up2d/edit_ocr', $data);
    }

    public function update($id){

        $data = [
            'id_relay' => $this->request->getVar('nama_keypoint'),
            'ocr_arus_1' => $this->request->getVar('ocr_arus_1'),
            'ocr_tms' => $this->request->getVar('ocr_tms'),
            'ocr_curva_1' => $this->request->getVar('ocr_curva_1'),
            'ocr_arus_2' => $this->request->getVar('ocr_arus_2'),
            'ocr_td' => $this->request->getVar('ocr_td'),
            'ocr_curva_2' => $this->request->getVar('ocr_curva_2'),
            'ocr_arus_3' => $this->request->getVar('ocr_arus_3'),
            'ocr_delay' => $this->request->getVar('ocr_delay'),
            'ocr_curva_3' => $this->request->getVar('ocr_curva_3'),
        ];

        $success = $this->ocr->updateOCR($data, $id);

        if ($success) {
            session()->setFlashdata('message', 'Diubah');
            return redirect()->to(base_url('admin/ocr'));
        }
    }
}
