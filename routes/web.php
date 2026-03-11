<?php
// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\CaraKerjaController;
use App\Http\Controllers\HargaController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KontakController;

// BERANDA
Route::get('/', [HomeController::class, 'index'])->name('home');

// LAYANAN
Route::prefix('layanan')->name('layanan.')->group(function () {
    Route::get('/',       [LayananController::class, 'index'])->name('index');
    Route::get('/{slug}', [LayananController::class, 'show'])->name('show');
});

// CARA KERJA
Route::get('/cara-kerja', [CaraKerjaController::class, 'index'])->name('cara-kerja');

// HARGA
Route::get('/harga', [HargaController::class, 'index'])->name('harga');

// TENTANG KAMI
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');

// KONTAK
Route::get('/kontak',  [KontakController::class, 'index'])->name('kontak');
Route::post('/kontak', [KontakController::class, 'kirim'])->name('kontak.kirim');