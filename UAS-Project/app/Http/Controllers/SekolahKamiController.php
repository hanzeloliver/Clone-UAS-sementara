<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahKamiController extends Controller
{
    public function index()
    {
        return view('sekolah-kami');
    }
}