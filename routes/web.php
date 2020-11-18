<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\PublicController::class, 'index']);
Route::get('/articoli', [App\Http\Controllers\PublicController::class, 'show'])->name('show');
Route::post('/product', [App\Http\Controllers\PublicController::class, 'store'])->name('product.create');
Route::get('/modifica/{product}',[App\Http\Controllers\PublicController::class,'edit'])->name('edit');
Route::put('/inserisci/{product}',[App\Http\Controllers\PublicController::class,'update'])->name('product.update');