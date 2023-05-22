<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\enroll>
 */
class enrollFactory extends Factory
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
            'CourseCode' => $this->faker->numberBetween(1, 10),
            'FirstMidterm' => $this->faker->numberBetween(0, 30),
            'SecondMidterm' => $this->faker->numberBetween(0, 20),
            'CourseWork' => $this->faker->numberBetween(0, 10),
            'Grade' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'F', 'U'])
        ];
    }
}
