<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    use HasFactory;

    protected $fillable = ['descripcion', 'entidad_id', 'numero_tarjeta', 'fecha_vencimiento', 'tipo_tarjeta_id', 'limite_credito', 'saldo_actual', 'nombre_titular', 'fecha_emision', 'estado'];
    protected $table = 'tarjetas'; // Nombre de la tabla en la base de datos
    // Relación con Entidad
    public function entidad()
    {
        return $this->belongsTo(Entidad::class);
    }

    // Relación con TipoTarjeta
    public function tipoTarjeta()
    {
        return $this->belongsTo(TipoTarjeta::class);
    }

    // Relación con Resumen
    public function resumenes()
    {
        return $this->hasMany(Resumen::class);
    }
}
