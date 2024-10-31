<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [ControladorVistas::class, 'index'])->name('principal');
Route::get('/registro', [ControladorVistas::class, 'registro'])->name('registro');
Route::post('/guardar-libro', [ControladorVistas::class, 'guardarLibro'])->name('guardarLibro');