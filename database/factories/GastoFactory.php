<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Resumen;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gasto>
 */
class GastoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'resumen_id' => Resumen::factory(),
            'descripcion' => $this->faker->sentence,
            'monto' => $this->faker->randomFloat(2, 1, 100),
            'fecha_gasto' => $this->faker->date(),
            'categoria' => $this->faker->word,
        ];
    }
}
