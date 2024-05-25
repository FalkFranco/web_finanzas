<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gasto;

class GastoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 0; $i < 300; $i++) {
            $fechaGasto = now()->subMonths(1)->startOfMonth()->addDays(rand(0, 20)); // Fecha aleatoria en el último mes
            $monto = rand(10, 500); // Monto del gasto aleatorio
            $categoria = $this->getRandomCategoria(); // Categoría aleatoria de una lista predefinida

            Gasto::create([
                'resumen_id' => rand(1, 5), // ID del resumen aleatorio
                'descripcion' => 'Descripción del gasto ' . ($i + 1),
                'monto' => $monto,
                'fecha_gasto' => $fechaGasto,
                'categoria' => $categoria,
                'created_at' => now(),
                'updated_at' => now(),
                // Otros campos del gasto...
            ]);
        }
    }

    private function getRandomCategoria()
    {
        $categorias = ['Comida', 'Transporte', 'Entretenimiento', 'Facturas', 'Otros'];
        return $categorias[array_rand($categorias)];
    }
}
