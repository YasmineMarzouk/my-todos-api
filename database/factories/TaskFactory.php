<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape([
        'todo_list_id' => "int",
        'title' => "string",
        'status' => "int",
        'is_daily_routine' => "bool",
        'finished_at' => "null",
        'comments' => "array|string"])
    ] public function definition(): array
    {
        return [
            'todo_list_id' => rand(1, 40),
            'title' => fake()->sentence(5),
            'status' => rand(1, 3),
            'is_daily_routine' => fake()->boolean(),
            'finished_at' => null,
            'comments' => fake()->sentence(15),
        ];
    }
}
