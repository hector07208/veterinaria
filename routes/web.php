<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MascotaController; // Importa el controlador de Mascotas
use App\Http\Controllers\DuenoController;   // Importa el controlador de Dueños
use App\Http\Controllers\VisitaController;   // Importa el controlador de Visitas
use Illuminate\Support\Facades\Route;

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Ruta del dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas para Mascotas
    Route::resource('mascotas', MascotaController::class);

    // Rutas para Dueños
    Route::resource('duenos', DuenoController::class);

    // Rutas para Visitas
    Route::resource('visitas', VisitaController::class);
});

// Incluye las rutas de autenticación
require __DIR__.'/auth.php';
