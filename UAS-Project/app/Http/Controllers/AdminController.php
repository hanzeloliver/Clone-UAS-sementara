<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function siswa()
    {

        $siswa = Student::all();

        return view('admin.siswa', ['siswa' => $siswa]);
    }
}
