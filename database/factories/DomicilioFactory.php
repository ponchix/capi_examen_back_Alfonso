<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Domicilio>
 */
class DomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'domicilio' => fake()->address(),
            'numero_exterior' => fake()->buildingNumber(),
            'colonia' => fake()->state(),
            'cp' => fake()->numberBetween(1000,6000),
            'ciudad' => fake()->city(),
        ];
    }
}
