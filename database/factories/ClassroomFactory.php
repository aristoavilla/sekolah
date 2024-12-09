<?php

namespace Database\Factories;

use App\Models\Major;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'class_name' => $this->faker->randomElement(['X-1', 'X-2', 'XI-1', 'XI-2', 'XII-1']),
            'major_id' => Major::inRandomOrder()->value('id'),
            'teacher_id' => Teacher::inRandomOrder()->value('id'),
        ];
    }
}
