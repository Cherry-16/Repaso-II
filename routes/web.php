<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

Route::get('/', [ControladorVistas::class, 'home'])->name('rutaprincipal');
Route::get('/registro', [ControladorVistas::class, 'registrar'])->name('rutaregistro');
Route::post('/registro', [ControladorVistas::class, 'procesarLibro'])->name('guardarLibro');