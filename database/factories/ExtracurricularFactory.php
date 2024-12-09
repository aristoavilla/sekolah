<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Club>
 */
class ExtracurricularFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->sentence,
            'image' => $this->faker->randomElement(['img/img1-1.jpg', 'img/img1-2.jpg', 'img/img1-3.jpg']),
            'president_id' => Student::factory(), // Assumes a Student factory exists
            'advisor_id' => Teacher::factory(),  // Assumes a Teacher factory exists
        ];
    }
}
