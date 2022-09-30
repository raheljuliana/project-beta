<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Penjualan extends BaseController
{
    public function index()
    {
        $data['main_view'] = 'penjualan/index';
        return view('layout', $data);
    }
}
