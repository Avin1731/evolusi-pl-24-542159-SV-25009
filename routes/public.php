<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
|
| Rute-rute untuk halaman publik (Company Profile Pengunjung).
|
*/

Route::prefix('p')->group(function () {
    Route::get('/', [PublicController::class, 'index'])->name('home');
    Route::get('/about', [PublicController::class, 'about'])->name('about');
    Route::get('/services', [PublicController::class, 'services'])->name('services');
    Route::get('/gallery', [PublicController::class, 'gallery'])->name('gallery');
    Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
});
