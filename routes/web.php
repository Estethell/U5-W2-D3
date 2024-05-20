<?php

use App\Http\Controllers\LibriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/lista', [LibriController::class,'lista'])->name('lista');

Route::get('/dettaglio', [LibriController::class,'dettaglio'])->name('dettaglio');

Route::get('/add/{id}', [LibriController::class,'add'])->name('add');

Route::get('/delete/{id}', [LibriController::class,'delete'])->name('delete');

Route::get('/modify/{id}', [LibriController::class,'modify'])->name('modify');


