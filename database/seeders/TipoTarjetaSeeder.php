<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoTarjeta;

class TipoTarjetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  Define los datos que deseas agregar
        $datos = [
            ['nombre' => 'Banco', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Financiera', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Billetera Virtual', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Inserta los datos en la tabla tipo_tarjetas
        TipoTarjeta::insert($datos);
    }
}
