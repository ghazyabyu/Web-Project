<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         $subjects = [
            'Bahasa Inggris',
            'Matematika',
            'Ilmu Pengetahuan Alam',
            'Ilmu Pengetahuan Sosial',
            'Bahasa Indonesia',
            'Teknologi Informasi',
            'Seni Budaya',
            'Pendidikan Jasmani',
            'Agama',
            'Kewarganegaraan',
        ];
        return [
            'name' => fake()->unique()->randomElement($subjects),
            'description' => fake()->text(),
        ];
    }
}
