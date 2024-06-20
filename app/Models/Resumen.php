<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resumen extends Model
{
    use HasFactory;
    protected $fillable = ['tarjeta_id', 'fecha_inicio', 'fecha_fin', 'fecha_vencimiento', 'monto_total', 'monto_minimo', 'estado', 'fecha_pago'];
    protected $table = 'resumenes'; // Nombre de la tabla en la base de datos
    // Relación con Tarjeta

    public function entidad()
    {
        return $this->belongsTo(Entidad::class);
    }
    public function tarjeta()
    {
        return $this->belongsTo(Tarjeta::class);
    }

    // Relación con Gasto
    public function gastos()
    {
        return $this->hasMany(Gasto::class);
    }
}
