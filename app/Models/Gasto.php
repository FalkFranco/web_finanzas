<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    use HasFactory;

    protected $fillable = ['resumen_id', 'descripcion', 'monto', 'fecha_gasto', 'categoria'];
    protected $table = 'gastos'; // Nombre de la tabla en la base de datos

    // Relación con Resumen
    public function resumen()
    {
        return $this->belongsTo(Resumen::class);
    }
}
