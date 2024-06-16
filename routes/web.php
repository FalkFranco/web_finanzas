<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EntidadController;
use App\Http\Controllers\TarjetaController;
use App\Http\Controllers\ResumenController;
use App\Http\Controllers\GastoController;

Route::get('/', function () {
    if (Auth::check()) {
        return view('home');
    }
    return view('landing');
});

// Rutas de autenticación
Auth::routes();

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Rutas para Entidades
    Route::resource('entidades', EntidadController::class);

    // Rutas para Tarjetas
    Route::resource('tarjetas', TarjetaController::class);

    // Rutas para Resúmenes
    Route::resource('resumenes', ResumenController::class);

    // Rutas para Gastos
    Route::resource('gastos', GastoController::class);
});
