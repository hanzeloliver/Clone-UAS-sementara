<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TentangSMKController;
use App\Http\Controllers\PembelajaranController;
use App\Http\Controllers\SekolahKamiController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\KehidupanSiswaController;
use App\Http\Controllers\KarierController;

Route::get('/tentang-smk', [TentangSMKController::class, 'index'])->name('tentang-smk');
Route::get('/pembelajaran', [PembelajaranController::class, 'index'])->name('pembelajaran');
Route::get('/sekolah-kami', [SekolahKamiController::class, 'index'])->name('sekolah-kami');
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
Route::get('/kehidupan-siswa', [KehidupanSiswaController::class, 'index'])->name('kehidupan-siswa');
Route::get('/karier', [KarierController::class, 'index'])->name('karier');

// Fixed route for /home
Route::get('/home', function () {
    return view('home'); // Assumes you have a Blade file `resources/views/home.blade.php`
})->name('home');

Route::get('/', function () {
    return response()->file(public_path('index.html'));
});
