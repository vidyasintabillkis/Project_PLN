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

    public function __construct()
    {
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
}
