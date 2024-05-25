<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEntidad extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];
    protected $table = 'tipo_entidades'; // Nombre de la tabla en la base de datos

    // Relación con Entidad
    public function entidades()
    {
        return $this->hasMany(Entidad::class);
    }
}
