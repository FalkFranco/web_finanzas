<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/entidades', function () {
    $entidades = App\Models\Entidad::all();
    return response()->json($entidades);
});
