<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibriController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/lista', [LibriController::class,'lista'])->name('lista');

Route::get('/dettaglio/{id}', [LibriController::class,'dettaglio'])->name('dettaglio');

Route::get('/add/{id}', [LibriController::class,'add'])->name('add');

Route::get('/delete/{id}', [LibriController::class,'delete'])->name('delete');

Route::get('/modify/{id}', [LibriController::class,'modify'])->name('modify');

Route::post('/lista',       [LibriController::class, 'store'])->name('books.store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
