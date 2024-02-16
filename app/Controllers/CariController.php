<?php

namespace App\Controllers;

use App\Models\PenyulangModel;

class CariController extends BaseController
{
    public $penyulang;
    public $validation;

    public function __construct()
    {
        $this->penyulang = new PenyulangModel();
        $this->validation = \Config\Services::validation();
    }
    public function cari(){
        $keyword = $this->request->getVar('keyword');
        

        //return view('up2d/cari', $data);
    }
}
