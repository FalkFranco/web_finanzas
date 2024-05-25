<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tarjeta;

class TarjetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $cantidadTarjetas = 5;

        for ($i = 0; $i < $cantidadTarjetas; $i++) {
            Tarjeta::create([
                'descripcion' => 'Descripción de la tarjeta ' . ($i + 1),
                'entidad_id' => rand(1, 4), // ID de la entidad aleatorio
                'numero_tarjeta' => $this->generateNumeroTarjeta(), // Generar un número de tarjeta aleatorio de 4 dígitos
                'fecha_vencimiento' => now()->addYears(rand(1, 5)), // Fecha de vencimiento aleatoria en los próximos 5 años
                'tipo_tarjeta_id' => rand(1, 3), // ID del tipo de tarjeta aleatorio entre 1 y 3
                'limite_credito' => rand(1000, 5000), // Límite de crédito aleatorio entre 1000 y 5000
                'saldo_actual' => rand(0, 1000), // Saldo actual aleatorio entre 0 y 1000
                'nombre_titular' => 'Nombre del Titular ' . ($i + 1),
                'fecha_emision' => now()->subMonths(rand(1, 12)), // Fecha de emisión aleatoria en el último año
                'estado' => 'Activa', // Estado predeterminado
                'created_at' => now(),
                'updated_at' => now(),
                // Otros campos de la tarjeta...
            ]);
        }
    }
    private function generateNumeroTarjeta()
    {
        return str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT); // Generar un número de tarjeta de 4 dígitos
    }
}
