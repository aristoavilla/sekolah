<?php

namespace Database\Factories;

use DateTime;
use App\Models\Principal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Principal>
 */
class PrincipalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Get the latest retire_date or start from 1964-08-24 if none exists
        $lastRetireDate = Principal::max('retire_date') ?? '1964-08-24';

        // Set promoted_date to be after the last retire_date
        $promotedDate = $this->faker->dateTimeBetween($lastRetireDate, '2023-12-31');

        // Ensure the retire_date is not more than 10 years after promoted_date
        $maxRetireDate = (clone $promotedDate)->modify('+10 years');
        $retireDate = $this->faker->dateTimeBetween(
            $promotedDate,
            min($maxRetireDate, new DateTime('2023-12-31'))
        );
        return [
            'name' => $this->faker->name(),
            'promoted_date' => $promotedDate->format('Y-m-d'),
            'retire_date' =>$retireDate->format('Y-m-d'),
            'biodate' => $this->faker->paragraphs(3, true),
            'image' => fake()->randomElement(['img/lana-del-rey.jpg', 'img/alex-turner.jpg', 'img/John_Denver.jpg']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
