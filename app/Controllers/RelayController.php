<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenyulangModel;
use App\Models\RelayModel;
use App\Models\UlpModel;
use CodeIgniter\HTTP\ResponseInterface;

class RelayController extends BaseController
{
    public $ulp;
    public $penyulang;
    public $relay;
    public $validation;
    // protected $db, $builder;

    public function __construct()
    {
        // $this->db      = \Config\Database::connect();
        // $this->builder = $this->db->table('data_relay_proteksi');
        $this->ulp = new UlpModel();
        $this->penyulang = new PenyulangModel();
        $this->relay = new RelayModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Relay Proteksi',
            'relay' => $this->relay->getRelay(),
        ];

        return view('up2d/relay', $data);
    }

    public function tambah()
    {
        $ulp = $this->ulp->getULP();
        $penyulang = $this->penyulang->getPenyulang();

        $data = [
            'title' => 'Tambah Data Relay Proteksi',
            'ulp' => $ulp,
            'penyulang' => $penyulang,
        ];

        return view('up2d/tambah_relay', $data);
    }

    public function lihat($id){
        //dd($id);
        $relaymodel = new RelayModel();
        $data = $relaymodel
        ->select('data_relay_proteksi.*, data_ulp.nama_ulp, data_penyulang.nama_penyulang_lama')
        ->join('data_ulp', 'data_ulp.id_ulp = data_relay_proteksi.id_ulp')
        ->join('data_penyulang', 'data_penyulang.id_penyulang = data_relay_proteksi.id_penyulang')
        ->find($id);
    
        //dd($data);
        if ($data['status_relay'] === '') {
            $data['status_relay'] = 'Kosong';
        } 
        if ($data['merk_relay'] === '') {
            $data['merk_relay'] = 'Kosong';
        } 
        if ($data['type_relay'] === '') {
            $data['type_relay'] = 'Kosong';
        }
        if ($data['seri_relay'] === '') {
            $data['seri_relay'] = 'Kosong';
        }
        if ($data['tahun_relay'] === null) {
            $data['tahun_relay'] = 'Kosong';
        }
        if ($data['umur_relay'] === null) {
            $data['umur_relay'] = 'Kosong';
        }
        if ($data['com_relay'] === '') {
            $data['com_relay'] = 'Kosong';
        }

        return view('up2d/lihat_relay', $data);
    }

    public function simpan()
    {

        $data = [
            'id_ulp' => $this->request->getVar('nama_ulp'),
            'id_penyulang' => $this->request->getVar('nama_penyulang_lama'),
            'nama_relay' => $this->request->getVar('nama_relay'),
            'status_relay' => $this->request->getVar('status_relay'),
            'urutan_keypoint' => $this->request->getVar('urutan_keypoint'),
            'nama_keypoint' => $this->request->getVar('nama_keypoint'),
            'merk_relay' => $this->request->getVar('merk_relay'),
            'type_relay' => $this->request->getVar('type_relay'),
            'seri_relay' => $this->request->getVar('seri_relay'),
            'tahun_relay' => $this->request->getVar('tahun_relay'),
            'umur_relay' => $this->request->getVar('umur_relay'),
            'com_relay' => $this->request->getVar('com_relay'),
            'rasio_ct_primer' => $this->request->getVar('rasio_ct_primer'),
            'rasio_ct_sekunder' => $this->request->getVar('rasio_ct_sekunder'),
        ];

        $success = $this->relay->saveRelay($data);

        if ($success) {
            session()->setFlashdata('message', 'Ditambahkan');
            return redirect()->to(base_url('admin/relay'));
        }
    }

    public function hapus($id)
    {
        $success = $this->relay->deleteRelay($id);

        if ($success) {
            session()->setFlashdata('message', 'Dihapus');
            return redirect()->to(base_url('admin/relay'));
        }
    }

    public function edit($id)
    {
        
        $relay = $this->relay->getRelay($id);
        $ulp = $this->ulp->getULP();
        $penyulang = $this->penyulang->getPenyulang();

        $data = [
            'title' => 'Ubah Data Relay Proteksi',
            'relay' => $relay,
            'ulp' => $ulp,
            'penyulang' => $penyulang
        ];

        return view('up2d/edit_relay', $data);
    }

    public function update($id){

        $data = [
            'id_ulp' => $this->request->getVar('nama_ulp'),
            'id_penyulang' => $this->request->getVar('nama_penyulang_lama'),
            'nama_relay' => $this->request->getVar('nama_relay'),
            'status_relay' => $this->request->getVar('status_relay'),
            'urutan_keypoint' => $this->request->getVar('urutan_keypoint'),
            'nama_keypoint' => $this->request->getVar('nama_keypoint'),
            'merk_relay' => $this->request->getVar('merk_relay'),
            'type_relay' => $this->request->getVar('type_relay'),
            'seri_relay' => $this->request->getVar('seri_relay'),
            'tahun_relay' => $this->request->getVar('tahun_relay'),
            'umur_relay' => $this->request->getVar('umur_relay'),
            'com_relay' => $this->request->getVar('com_relay'),
            'rasio_ct_primer' => $this->request->getVar('rasio_ct_primer'),
            'rasio_ct_sekunder' => $this->request->getVar('rasio_ct_sekunder'),
        ];

        $success = $this->relay->updateRelay($data, $id);

        if ($success) {
            session()->setFlashdata('message', 'Diubah');
            return redirect()->to(base_url('admin/relay'));
        }
    }
}
