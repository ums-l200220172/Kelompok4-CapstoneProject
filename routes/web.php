<?php

use App\Http\Controllers\AdminPupukController;
use App\Http\Controllers\AdminEdukasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataLahanController;
use App\Http\Controllers\PerbandinganController;



Route::get('/', function () {
    return view('home'); // Halaman pertama
});

// Auth Routes
Route::get('/login', function () {
    return view('home.login'); // Halaman login
})->name('login');
Route::get('/register', function () {
    return view('home.register'); // Halaman register
})->name('register');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Fitur
Route::resource('fitur', DataLahanController::class);
Route::get('/rekomendasi', [DataLahanController::class, 'index'])->name('fitur.rekomendasi');

Route::get('/perbandingan', [PerbandinganController::class, 'index'])->name('fitur.perbandingan');
Route::post('/perbandingan/hasil', [PerbandinganController::class, 'bandingkan'])->name('fitur.perbandingan');
Route::get('/get-data-pupuk', [PerbandinganController::class, 'getDataPupuk'])->name('fitur.perbandingan');
Route::get('/search-pupuk', [PerbandinganController::class, 'search'])->name('fitur.perbandingan');
Route::get('/admin-pupuk', [AdminPupukController::class, 'index'])->name('admin.pupuk');
Route::get('/admin-edukasi', [AdminEdukasiController::class, 'index'])->name('admin.edukasi');


Route::get('/dashboard', function () {
    return view('home.dashboard'); // Halaman utama setelah login
});


Route::get('/kalkulator', function () {
    return view('fitur.kalkulator');
});
Route::get('/admin-edukasi', function () {
    return view('admin.edukasi');
});

// Route::get('/perbandingan', function () {
//     return view('fitur.perbandingan');
// });