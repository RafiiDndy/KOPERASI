<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\SimpananController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
  
    Route::get('/anggota',[AnggotaController::class, 'index'])->name('Anggota.index');
    Route::get('/anggota/{id}',[AnggotaController::class, 'detail'])->name('Anggota.detail');
    Route::get('/simpanan',[SimpananController::class, 'index'])->name('Simpanan.index');
    Route::get('/manage-simpanan',[SimpananController::class, 'manage'])->name('Simpanan.manage');

});
