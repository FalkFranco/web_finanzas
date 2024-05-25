<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Resumen;

class ResumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 0; $i < 100; $i++) {
            $fechaInicio = now()->subMonths(1)->startOfMonth()->addDays(rand(0, 20)); // Fecha aleatoria en el último mes
            $fechaFin = $fechaInicio->copy()->endOfMonth(); // Último día del mes
            $fechaVencimiento = $fechaFin->copy()->addDays(10); // 10 días después del último día del mes
            $montoTotal = rand(100, 1000); // Monto total aleatorio
            $montoMinimo = rand(1, $montoTotal - 1); // Monto mínimo aleatorio menor que el monto total
            $estado = rand(0, 1) ? 'pendiente' : 'pagado'; // Aleatoriamente 'pendiente' o 'pagado'
            $fechaPago = $estado == 'pagado' ? $fechaVencimiento->copy()->subDays(rand(0, 10)) : null; // Fecha de pago dentro de los 10 días posteriores a la fecha de vencimiento si está pagado

            Resumen::create([
                'tarjeta_id' => rand(1, 5), // ID de la tarjeta aleatorio
                'fecha_inicio' => $fechaInicio,
                'fecha_fin' => $fechaFin,
                'fecha_vencimiento' => $fechaVencimiento,
                'monto_total' => $montoTotal,
                'monto_minimo' => $montoMinimo,
                'estado' => $estado,
                'fecha_pago' => $fechaPago,
                'created_at' => now(),
                'updated_at' => now(),
                // Otros campos del resumen...
            ]);
        }
    }
}
