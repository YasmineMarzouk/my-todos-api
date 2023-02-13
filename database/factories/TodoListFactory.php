<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class TodoListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape([
        'user_id' => "int",
        'category_id' => "int",
        'title' => "string",
        'description' => "array|string",
        'type' => "int",
        'progress' => "int",
        'start_from' => "float|int|string",
        'recreate' => "bool",
        'unfinished_only' => "bool"])
    ] public function definition(): array
    {
        return [
            'user_id' => rand(1, 10),
            'category_id' => rand(1, 5),
            'title' => fake()->sentence(2),
            'description' => fake()->sentence(30),
            'type' => rand(1, 4),
            'progress' => rand(1, 100),
            'start_from' => now(),
            'recreate' => fake()->boolean(50),
            'unfinished_only' => fake()->boolean(50),
        ];
    }
}
