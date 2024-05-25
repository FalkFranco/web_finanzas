<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tarjeta;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resumen>
 */
class ResumenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tarjeta_id' => Tarjeta::factory(),
            'fecha_inicio' => $this->faker->date(),
            'fecha_fin' => $this->faker->date(),
            'fecha_vencimiento' => $this->faker->date(),
            'monto_total' => $this->faker->randomFloat(2, 100, 1000),
            'monto_minimo' => $this->faker->randomFloat(2, 10, 100),
            'estado' => $this->faker->randomElement(['pagado', 'pendiente']),
            'fecha_pago' => $this->faker->optional()->date(),
        ];
    }
}
