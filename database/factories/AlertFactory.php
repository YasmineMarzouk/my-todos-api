<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class AlertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape([
        'user_id' => "int",
        'title' => "string",
        'body' => "array|string",
        'icon' => "string",
        'source' => "int"])
    ] public function definition(): array
    {
        return [
            'user_id' => rand(1, 10),
            'title' => fake()->sentence(4),
            'body' => fake()->sentence(10),
            'icon' => fake()->imageUrl(),
            'source' => rand(1, 2),
        ];
    }
}
