<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\IsiLayananController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/tentang-kami', [AboutController::class, 'index'])->name('about');
Route::get('/foto', [GaleriController::class, 'foto'])->name('foto');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/kirim-pesan', [LandingController::class, 'storePesan'])->name('pesan');
Route::get('/layanan/{id}', [IsiLayananController::class, 'index'])->name('layanan');