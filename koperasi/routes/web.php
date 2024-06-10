<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\SimpananController;
use App\Http\Controllers\RecapitulationController;
use App\Http\Controllers\SHUController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\SupportController;

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

    Route::get('/topic/create', [TopicController::class, 'create'])->name('Topic.create');
    Route::post('/topic/save', [TopicController::class, 'save'])->name('Topic.save');
    Route::get('/topic/index', [TopicController::class, 'index'])->name('Topic.index');
    Route::get('/topic/detail/{id}',[TopicController::class, 'detail'])->name('Topic.detail');
    Route::post('/reply/save', [TopicController::class, 'ReplySave'])->name('ReplySave.save');

    Route::get('topic/edit/{id}', [TopicController::class, 'edit'])->name('topic.edit');
    Route::put('topic/update/{id}', [TopicController::class, 'update'])->name('topic.update');
    Route::delete('topic/delete/{id}', [TopicController::class, 'delete'])->name('topic.delete');
});
