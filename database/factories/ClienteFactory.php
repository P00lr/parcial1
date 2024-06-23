<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombreCompleto' => $this->faker->name,
            'telefono' => $this->faker->unique()->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'direccion' => $this->faker->address,
            'genero' => $this->faker->randomElement(['masculino', 'femenino', 'otro']),
            'fechaNacimiento' => $this->faker->date('Y-m-d'),
            'formaPago' => $this->faker->randomElement(['tarjeta', 'efectivo', 'transferencia']),
            'estadoCliente' => $this->faker->randomElement(['activo', 'inactivo']),
        ];
    }
}
