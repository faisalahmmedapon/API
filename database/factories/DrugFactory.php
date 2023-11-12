<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Drug>
 */
class DrugFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            "name" => fake()->name(),
            "weight" => '10',
            "type" => 'Tab',
            "vendor" => 'Aristopharma Ltd.',
            "price" => '100.0',
            "quantity" => '100',
        ];
    }
}
