<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
|
| Rute-rute untuk halaman publik (Company Profile Pengunjung).
| Dikelola dalam feature/public-pages.
|
*/

// Beranda / Home pengunjung (sementara placeholder redirect ke splash)
Route::get('/beranda', function () {
    return redirect()->route('splash');
})->name('home');

// Halaman-halaman publik berikutnya akan ditambahkan di sini:
// Route::get('/about', ...)->name('about');
// Route::get('/services', ...)->name('services');
// Route::get('/gallery', ...)->name('gallery');
// Route::get('/contact', ...)->name('contact');
