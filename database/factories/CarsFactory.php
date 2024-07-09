<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cars>
 */
class CarsFactory extends Factory
{
  
    public function definition(): array
    {
        return [
            'model' => fake()->text(),
            'title' => fake()->title(),
            'price' => fake()->randomNumber(),
            'description' => fake()->text()
        ];
    }
}
