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

    public function profile(): string
    {
        return view('nonup2d/profile');
    }

    public function tim(): string
    {
        return view('nonup2d/tim');
    }

    public function proteksi(): string
    {
        return view('nonup2d/proteksi');
    }

    public function login(): string
    {
        return view('up2d/login');
    }

    // public function processLogin()
    // {
    //     $username = $this->request->getPost('username');
    //     $password = $this->request->getPost('password');
    //     if ($username === 'admin' && $password === 'Apdlampung123') {
    //         session()->set('Login', true);
    //         return redirect()->to('/admin/cari');
    //     } else {
    //         return redirect()->to('/login')->with('error', 'Username or password is incorrect');
    //     }
    // }

    public function processLogin()
    {
        $session = \Config\Services::session();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = 'admin';
        $pass = 'admin';

        if (($user == $email) && ($pass == $password)) {
            $data = [
                'auth' => 1,
                'email' => $email
            ];
            $session->set($data);
            return redirect()->to('/admin/cari');
        } else {
            return redirect()->to('/login')->with('error', 'Username or password is incorrect');
        }
        // return view('welcome_message'); 
    }

    public function processLogout()
    {
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to('/');
    }


    public function cari()
    {

        $data = [
            'title' => 'Caru Grafik Setting Proteksi',
            'penyulang' => $this->penyulang->getPenyulang(),
        ];

        return view('up2d/cari', $data);
    }
}
