<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EntidadController;
use App\Http\Controllers\TarjetaController;
use App\Http\Controllers\ResumenController;
use App\Http\Controllers\GastoController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('entidades', EntidadController::class);
Route::resource('tarjetas', TarjetaController::class);
Route::resource('resumenes', ResumenController::class);
Route::resource('gastos', GastoController::class);
