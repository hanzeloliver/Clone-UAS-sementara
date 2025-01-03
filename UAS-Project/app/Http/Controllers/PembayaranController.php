<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran; // Asumsikan ada model Pembayaran
use Auth;

class PembayaranController extends Controller
{
    // Menyimpan data pembayaran
    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'nominal' => 'required|numeric|min:1',
            'metode_pembayaran' => 'required|string',
        ]);

        // Menyimpan data pembayaran
        Pembayaran::create([
            'student_id' => $request->student_id,
            'nominal' => $request->nominal,
            'metode_pembayaran' => $request->metode_pembayaran,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('home')->with('success', 'Pembayaran berhasil dilakukan!');
    }
}