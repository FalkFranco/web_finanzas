<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TipoEntidad;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entidad>
 */
class EntidadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->company,
            'tipo_entidad_id' => TipoEntidad::factory(),
            'user_id' => 1,
        ];
    }
}
