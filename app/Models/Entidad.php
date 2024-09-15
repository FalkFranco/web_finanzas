<?php
// app/Models/Entidad.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'tipo_entidad_id', 'user_id'];
    protected $table = 'entidades'; // Nombre de la tabla en la base de datos

    // Relación con TipoEntidad
    public function tipoEntidad()
    {
        return $this->belongsTo(TipoEntidad::class);
    }

    // Relación con Tarjeta
    public function tarjetas()
    {
        return $this->hasMany(Tarjeta::class);
    }

    public function getData()
    {
        $entidades = Entidad::with('tipoEntidad')->get(); // Asegúrate de incluir la relación
        return response()->json($entidades);
    }
}
