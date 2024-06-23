<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word,
            'cantidad' => $this->faker->randomNumber(2),
            'precio' => $this->faker->randomFloat(2, 10, 100),
            'descripcion' => $this->faker->sentence,
            'marca' => $this->faker->company,
            'agregado_fecha' => $this->faker->date(),
            'fecha_vencimiento' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'categoria' => $this->faker->word,
        ];
    }
}
