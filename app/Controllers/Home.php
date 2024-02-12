<?php

namespace App\Controllers;

use App\Models\PenyulangModel;

class Home extends BaseController
{
    public $penyulang;
    public $validation;

    public function __construct()
    {
        $this->penyulang = new PenyulangModel();
        $this->validation = \Config\Services::validation();
    }

    public function index(): string
    {
        return view('nonup2d/landingpage');
    }

    public function tim(): string
    {
        return view('nonup2d/tim');
    }

    public function organisasi(): string
    {
        return view('nonup2d/organisasi');
    }

    public function cari(){

        $data = [
            'title' => 'Caru Grafik Setting Proteksi',
            'penyulang' => $this->penyulang->getPenyulang(),
        ];

        return view('up2d/cari', $data);
    }
}
