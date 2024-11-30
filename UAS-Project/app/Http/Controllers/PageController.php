<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function tentangSmk()
    {
        return view('tentang-smk');
    }

    public function pembelajaran()
    {
        return view('pembelajaran');
    }

    public function pendaftaran()
    {
        return view('pendaftaran');
    }

    public function kehidupanSiswa()
    {
        return view('kehidupan-siswa');
    }

    public function karier()
    {
        return view('karier');
    }
}
