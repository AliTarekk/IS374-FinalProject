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
            'CreditHours' => $this->faker->randomFloat(3, 1.5, 4.0),
            'MinStudents' => $this->faker->numberBetween(15, 30),
            'CourseTitle' => $this->faker->name(),
            'DepartmentId' => $this->faker->numberBetween(1, 10),
        ];
    }
}
