<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pembelian extends BaseController
{
    public function index()
    {
        $data['main_view'] = 'pembelian/index';
        return view('layout', $data);
    }
}
