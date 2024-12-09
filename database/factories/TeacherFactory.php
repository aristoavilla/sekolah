<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dateRetired = $this->faker->optional()->dateTimeBetween('now', '+10 years');
        
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'date_hired' => $this->faker->dateTimeBetween('-20 years', '-1 year')->format('Y-m-d'),
            'date_retired' => $dateRetired ? $dateRetired->format('Y-m-d') : null,
            'subject_id' => \App\Models\Subject::factory(),
        ];
    }
}
