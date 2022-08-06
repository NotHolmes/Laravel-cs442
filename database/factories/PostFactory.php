<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->catchPhrase(),
            'description' => fake()->realText(200),
            'view_count' => fake()->numberBetween(0, 200000),
            'like_count' => fake()->numberBetween(0, 50000)
        ];
    }
}