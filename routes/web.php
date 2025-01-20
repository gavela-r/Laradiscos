<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'inicio'])->name('inicio');
Route::get('disco', [MainController::class, 'discos'])->name('discos');
Route::get('empresa', [MainController::class, 'empresa'])->name('empresa');
Route::get('contacto', [MainController::class, 'contacto'])->name('contacto');

Route::resource('discos', 'App\Http\Controllers\DiscoController');