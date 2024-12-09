<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
    public function definition(): array
    {
        return [
            'user_id' => 1, // Assuming user ID 1 exists
            'title' => $this->faker->sentence(),
            'slug' => Str::slug($this->faker->sentence()),
            'content' => $this->faker->paragraphs(3, true),
            'image' => fake()->randomElement(['img/img1-1.jpg', 'img/img1-2.jpg', 'img/img1-3.jpg']),
        ];
    }
}
