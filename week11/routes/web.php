<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\Unit_KerjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/pasien', [PasienController::class, 'index']);
Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');

Route::get('/periksa', [PeriksaController::class, 'index']);
Route::post('/periksa/store', [PeriksaController::class, 'store'])->name('periksa.store');

Route::get('/kelurahan', [KelurahanController::class, 'index']);
Route::post('/kelurahan/store', [KelurahanController::class, 'store'])->name('kelurahan.store');

Route::get('/dokter', [DokterController::class, 'index']);
Route::post('/dokter/store', [DokterController::class, 'store'])->name('dokter.store');

Route::get('/unit_kerja', [Unit_KerjaController::class, 'index']);
Route::post('/unit_kerja/store', [Unit_KerjaController::class, 'store'])->name('unit_kerja.store');

