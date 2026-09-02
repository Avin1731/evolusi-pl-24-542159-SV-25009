<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SplashController;
use Illuminate\Support\Facades\Route;

// Splash / Landing
Route::get('/', [SplashController::class, 'index'])->name('splash');

// Public pages (placeholder — akan diisi di feature/public-pages)
Route::get('/beranda', function () {
    return redirect('/'); // temp
})->name('home');

// Dashboard (admin area — akan diisi di feature/admin-panel)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
