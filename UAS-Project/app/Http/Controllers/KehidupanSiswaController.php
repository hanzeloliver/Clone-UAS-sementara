<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KehidupanSiswaController extends Controller
{
    public function index()
    {
        return view('kehidupan-siswa');
    }
}