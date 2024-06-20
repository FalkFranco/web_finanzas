<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Entidad;
use App\Models\Resumen;
use App\Models\Tarjeta;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/entidades', function () {
    // Usar eager loading para cargar la relación 'tipoEntidad'
    $entidades = Entidad::with('tipoEntidad')->get();
    return response()->json($entidades);
});

Route::get('/tarjetas', function () {
    // Usar eager loading para cargar las relaciones 'tarjeta' y 'gastos'
    $resumenes = Tarjeta::with(['tipoTarjeta', 'resumenes', 'entidad'])->get();
    return response()->json($resumenes);
});

Route::get('/resumenes', function () {
    // Usar eager loading para cargar las relaciones 'tarjeta' y 'gastos'
    $resumenes = Resumen::with(['tarjeta.entidad', 'gastos'])->get();
    return response()->json($resumenes);
});
Route::get('/resumenes/tarjeta/{tarjeta_id}', function ($tarjeta_id) {
    $resumenes = Resumen::with(['tarjeta', 'gastos'])
        ->where('tarjeta_id', $tarjeta_id)
        ->get();
    return response()->json($resumenes);
});
Route::get('/resumenes/entidad/{entidad_id}', function ($entidad_id) {
    $tarjetas = Entidad::findOrFail($entidad_id)->tarjetas;
    $tarjeta_ids = $tarjetas->pluck('id');

    $resumenes = Resumen::with(['tarjeta', 'gastos'])
        ->whereIn('tarjeta_id', $tarjeta_ids)
        ->get();
    return response()->json($resumenes);
});
