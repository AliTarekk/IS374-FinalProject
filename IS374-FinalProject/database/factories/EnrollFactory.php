<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enroll>
 */
class EnrollFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'StudentId' => $this->faker->numberBetween(1, 10),
            'CourseCode' => $this->faker->numberBetween(1, 10)
        ];
    }
}
