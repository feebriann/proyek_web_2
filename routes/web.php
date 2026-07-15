<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ReviewController;

// Rute ini hanya bisa diakses kalau user sudah Login
Route::middleware(['auth'])->group(function () {
    Route::get('/albums', [AlbumController::class, 'index'])->name('albums.index');
    Route::get('/albums/create', [AlbumController::class, 'create'])->name('albums.create');
    Route::post('/albums', [AlbumController::class, 'store'])->name('albums.store');
    Route::get('/albums/{id}', [AlbumController::class, 'show'])->name('albums.show');
    Route::delete('/albums/{id}', [AlbumController::class, 'destroy'])->name('albums.destroy');
    Route::post('/albums/{album}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
    
    // [!] INI DIA TAMBAHANNYA: Rute mutlak untuk menghancurkan log/komentar
    Route::delete('/reviews/{id}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
});

Route::resource('albums', AlbumController::class);