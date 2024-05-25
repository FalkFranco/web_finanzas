<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoTarjeta extends Model
{
    use HasFactory;
    protected $fillable = ['nombre'];
    protected $table = 'tipo_tarjetas'; // Nombre de la tabla en la base de datos
    // Relación con Tarjeta
    public function tarjetas()
    {
        return $this->hasMany(Tarjeta::class);
    }
}
