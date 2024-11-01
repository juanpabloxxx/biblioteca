<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BibliotecaController;

Route::get('/', [BibliotecaController::class, 'index'])->name('principal');
Route::get('/registro', [BibliotecaController::class, 'create'])->name('libros.create');
Route::post('/registro', [BibliotecaController::class, 'store'])->name('libros.store');


require __DIR__.'/auth.php';
