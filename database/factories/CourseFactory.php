<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'coursename' => fake()->words(3, true), 
            'coursecode' => strtoupper(fake()->bothify('???###')), 
            'courseteacher' => fake()->paragraph(), 
            'faculty_id' => \App\Models\Faculty::query()->inRandomOrder()->value('id')
        ];
    }
}
