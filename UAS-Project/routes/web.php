<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
Route::get('/kehidupan-siswa', [KehidupanSiswaController::class, 'index'])->name('kehidupan-siswa');
Route::get('/karier', [KarierController::class, 'index'])->name('karier');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/', function () {
    return redirect()->route('home');
});

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/siswa', [AdminController::class, 'siswa'])->name('admin.siswa');
});
