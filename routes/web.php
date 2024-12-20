<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\AbsensiController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// Authentication routes
Auth::routes();

// Home route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Resource routes for each model
Route::resource('pelajaran', PelajaranController::class);
Route::resource('kelas', KelasController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('guru', GuruController::class);
Route::resource('penilaian', PenilaianController::class);
Route::resource('absensi', AbsensiController::class); // Route untuk AbsensiController

// Tambahan route untuk dashboard
Route::get('/dashboard', function () {
    return view('home'); // Arahkan ke home.blade.php
});
