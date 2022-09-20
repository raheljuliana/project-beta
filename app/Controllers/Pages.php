<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        $data['main_view'] = 'pages/index';
        return view('layout', $data);
    }

    public function dashboard()
    {
        $data['main_view'] = 'pages/dashboard';
        return view('layout', $data);
    }
}