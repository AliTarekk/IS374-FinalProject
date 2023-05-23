<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Faculty;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name' => $this->faker->word,
            'FacultyId' => $this->faker->randomElement(Faculty::pluck('FacultyId')->toArray()),
        ];
    }
}
