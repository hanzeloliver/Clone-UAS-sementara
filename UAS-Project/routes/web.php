<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TentangSMKController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\KehidupanSiswaController;
use App\Http\Controllers\KarierController;
use App\Http\Controllers\RegisterLoginController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SekolahKamiController;
use App\Http\Controllers\PembelajaranController;

// Public routes for the about, school, registration, and other pages
Route::get('/tentang-smk', [TentangSMKController::class, 'index'])->name('tentang-smk');
Route::get('/pembelajaran', [PembelajaranController::class, 'index'])->name('pembelajaran');
Route::get('/sekolah-kami', [SekolahKamiController::class, 'index'])->name('sekolah-kami');
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
Route::get('/kehidupan-siswa', [KehidupanSiswaController::class, 'index'])->name('kehidupan-siswa');
Route::get('/karier', [KarierController::class, 'index'])->name('karier');

// Routes for user authentication (registration, login, logout)
Route::get('/register', [RegisterLoginController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterLoginController::class, 'register'])->name('register.store');
Route::get('/login', [RegisterLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [RegisterLoginController::class, 'login'])->name('login.store');
Route::post('/logout', [RegisterLoginController::class, 'logout'])->name('logout');

// Home route - no login required
Route::get('/home', function () {
    return view('home');
})->name('home');

// Protected routes for authenticated users (payment functionality)
Route::middleware(['auth'])->group(function () {
    // Pembayaran routes
    Route::post('/pembayaran', [PembayaranController::class, 'store'])->name('pembayaran.store');
});

// Admin routes, only accessible by admin users
Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/siswa', [AdminController::class, 'siswa'])->name('admin.siswa');
});

// Redirect the root URL to the home page
Route::get('/', function () {
    return redirect()->route('home');
});