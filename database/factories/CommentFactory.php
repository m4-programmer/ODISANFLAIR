<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => fake()->numberBetween(1,10),
            'comments' => fake()->sentence,
            'user_id' => fake()->optional()->randomElement([1,null]),
            'name' => fake()->name,
            'email' => fake()->email,
            'website' => fake()->text,
        ];
    }
}
