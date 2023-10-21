<?php

namespace App\Controllers;

use App\Models\BabtisModel;
use App\Models\NikahModel;
use App\Models\SidiModel;

class Home extends BaseController
{
    public function index(): string
    {
        $baptis = new BabtisModel();
        $sidi = new SidiModel();
        $nikah = new NikahModel();
        $data['baptis'] = $baptis->countAllResults();
        $data['sidi'] = $sidi->countAllResults();
        $data['nikah'] = $nikah->countAllResults();
        $data['title'] = "Beranda";
        $data['icon'] = "fas fa-home";
        return view('home', $data);
    }
}
