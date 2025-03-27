<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home'); // Halaman pertama
});

Route::get('/login', function () {
    return view('home.login'); // Halaman login
})->name('login');

Route::get('/register', function () {
    return view('home.register'); // Halaman register
})->name('register');

Route::post('/home', function () {
    return redirect('/home'); // Redirect ke halaman utama
});

Route::get('/home', function () {
    return view('home.home'); // Halaman utama
});
Route::get('/rekomendasi', function () {
    return view('fitur.rekomendasi');
});

Route::get('/kalkulator', function () {
    return view('fitur.kalkulator');
});

Route::get('/perbandingan', function () {
    return view('fitur.perbandingan');
});