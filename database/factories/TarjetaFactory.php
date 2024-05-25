<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Entidad;
use App\Models\TipoTarjeta;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarjeta>
 */
class TarjetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descripcion' => $this->faker->sentence,
            'entidad_id' => Entidad::factory(),
            'numero_tarjeta' => $this->faker->numberBetween(1000, 9999),
            'fecha_vencimiento' => $this->faker->date(),
            'tipo_tarjeta_id' => TipoTarjeta::factory(),
            'limite_credito' => $this->faker->randomFloat(2, 1000, 10000),
            'saldo_actual' => $this->faker->randomFloat(2, 0, 10000),
            'nombre_titular' => $this->faker->name,
            'fecha_emision' => $this->faker->date(),
            'estado' => $this->faker->randomElement(['activa', 'bloqueada']),
        ];
    }
}
