<?php

namespace Database\Factories;
use App\Models\Classroom;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'date_of_birth' => fake()->date(),
            'address' => fake()->address(),
            'gender' => fake()->randomElement(['male', 'female']),
            'classroom_id' => Classroom::factory(),
            
        ];
    }
}
