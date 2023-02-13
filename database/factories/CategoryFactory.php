<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape([
        'title' => "string",
        'icon' => "string"])
    ] public function definition(): array
    {
        return [
            'title' => fake()->sentence(1),
            'icon' => fake()->imageUrl(),
        ];
    }
}
