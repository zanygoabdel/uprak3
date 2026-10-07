<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return redirect()->route('laporan.form');
});

// Halaman form
Route::get('/lapor', [LaporanController::class, 'form'])
    ->name('laporan.form');

// Proses form menggunakan POST
Route::post('/lapor', [LaporanController::class, 'simpan'])
    ->name('laporan.simpan');

// Halaman daftar laporan
Route::get('/laporan', [LaporanController::class, 'daftar'])
    ->name('laporan.daftar');