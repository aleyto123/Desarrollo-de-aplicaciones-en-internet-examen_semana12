<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotaController; 

Route::get('/', function () {
    return view('welcome');
});

// Ruta para buscar mascotas por tipo
Route::get('/mascotas/tipo', [MascotaController::class, 'buscarPorTipo'])->name('mascotas.por_tipo');
Route::get('/mascotas/edad', [MascotaController::class, 'ordenarPorEdad'])->name('mascotas.por_edad');
Route::get('/mascotas/filtro', [MascotaController::class, 'filtrarPorTipoYRaza'])->name('mascotas.filtro');

