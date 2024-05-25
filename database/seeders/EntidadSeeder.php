<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Entidad;

class EntidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $entidadesConocidas = [
            'Santander',
            'BBVA',
            'Naranja',
            'Mercadopago',
            // Agrega más entidades según sea necesario
        ];

        foreach ($entidadesConocidas as $nombre) {
            Entidad::create([
                'nombre' => $nombre,
                'tipo_entidad_id' => rand(1, 3), // ID del tipo de entidad aleatorio entre 1 y 3
                'user_id' => 1, // ID del usuario que creó la entidad
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
