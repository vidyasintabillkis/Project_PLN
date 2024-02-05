<?php

namespace App\Controllers;

class Home extends BaseController
{
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
}
