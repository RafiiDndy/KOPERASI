<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\SimpananController;
use App\Http\Controllers\RecapitulationController;
use App\Http\Controllers\SHUController;

// Route for the welcome page
Route::get('/', function () {
    return view('welcome');
});

// Routes that require authentication
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [SHUController::class, 'index'])->name('dashboard');

    Route::get('/anggota', [AnggotaController::class, 'index'])->name('Anggota.index');
    Route::get('/anggota/{id}', [AnggotaController::class, 'detail'])->name('Anggota.detail');
    Route::get('/verifikasi-anggota', [AnggotaController::class, 'verifikasi'])->name('VerifikasiAnggota');
    Route::get('/simpanan', [SimpananController::class, 'index'])->name('Simpanan.index');
    Route::get('/manage-simpanan', [SimpananController::class, 'manage'])->name('Simpanan.manage');
    Route::get('/recapitulation', [RecapitulationController::class, 'index'])->name('Recapitulation.index');
    Route::get('/expense', [AnggotaController::class, 'expense'])->name('Anggota.expense');
});
