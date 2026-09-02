<?php

use App\Http\Controllers\SplashController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes (Main Entrypoint)
|--------------------------------------------------------------------------
|
| File utama penampung rute. Memuat rute spesifik berdasarkan modul
| untuk meminimalkan potensi merge conflict antar branch fitur.
|
*/

// Halaman Splash Screen Utama
Route::get('/', [SplashController::class, 'index'])->name('splash');

// Modul Rute Otentikasi (Breeze)
require __DIR__.'/auth.php';

// Modul Rute Halaman Publik (Company Profile)
require __DIR__.'/public.php';

// Modul Rute Admin Panel & CRUD
require __DIR__.'/admin.php';
