<?php

use App\Http\Controllers\DuenoController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\VisitaController;
use Illuminate\Support\Facades\Route;

// Rutas de autenticación
Auth::routes();

// Rutas para Dueños
Route::resource('duenos', DuenoController::class)->middleware('auth');

// Rutas para Mascotas
Route::resource('mascotas', MascotaController::class)->middleware('auth');

// Rutas para Visitas
Route::resource('visitas', VisitaController::class)->middleware('auth');

// Ruta de inicio
Route::get('/', function () {
    return view('welcome');
})->middleware('auth');
