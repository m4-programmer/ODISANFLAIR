<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition(): array
    {
        $title = fake()->sentence(3);
        return [
            'title' => $title,
            'user_id' => 1,
            'tag_id' => fake()->numberBetween(1,10),
            'post' => fake()->text,
            'slug' => Str::slug($title),
            'likes' => fake()->numberBetween(1,100),
            'cover' => "asset/images/news/img" . str_pad(fake()->numberBetween(1, 17), 2, '0', STR_PAD_LEFT) . ".jpg",
            'created_at' => fake()->date
        ];
    }
}
