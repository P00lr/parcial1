<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
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
            'ci' => $this->faker->unique()->randomNumber(8),
            'telefono' => $this->faker->unique()->randomNumber(8),
            'fechaNacimiento' => $this->faker->date(),
            'email' => $this->faker->unique()->safeEmail,
            'direccion' => $this->faker->address,
            'cargo' => $this->faker->jobTitle,
            'salario' => $this->faker->randomFloat(2, 1000, 5000),
        ];
    }
}
