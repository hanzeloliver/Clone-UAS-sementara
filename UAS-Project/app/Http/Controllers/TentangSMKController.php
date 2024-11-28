<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangSMKController extends Controller
{
    public function index()
    {
        return view('tentang-smk');
    }
}
