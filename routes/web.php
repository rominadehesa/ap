<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PropiedadController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/inicio', [PublicController::class, 'inicio'])->name('inicio');
Route::get('/todas-propiedades', [PublicController::class, 'verPropiedades'])->name('todas-propiedades');
Route::get('/ver-propiedad/{id}', [PublicController::class, 'verPropiedadPorId'])->name('ver-propiedad');
Route::get('/quienes-somos', [PublicController::class, 'quienesSomos'])->name('quienes-somos');

Route::resource('propiedades', PropiedadController::class);
Route::get('/propiedades/{id}/galeria', [PropiedadController::class, 'galeria'])
    ->name('propiedades.galeria');

Route::get('/propiedades/{id}/edit', [PropiedadController::class, 'edit'])
    ->name('propiedades.edit');

Route::post('/propiedades/{id}/galeria', [PropiedadController::class, 'guardarGaleria'])
    ->name('propiedades.galeria.store');

Route::delete('/imagenes/{id}', [PropiedadController::class, 'quitarImagen'])
    ->name('imagenes.destroy');

Route::get('/propiedades/{id}/caracteristicas', [PropiedadController::class, 'caracteristicas'])
    ->name('propiedades.caracteristicas');

Route::post('/propiedades/{id}/caracteristicas', [PropiedadController::class, 'guardarCaracteristica'])
    ->name('propiedades.caracteristicas.store');

Route::delete('/caracteristicas/{id}', [PropiedadController::class, 'eliminarCaracteristica'])
    ->name('caracteristicas.destroy');



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
