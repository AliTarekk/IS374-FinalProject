<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Department;

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
            'CourseTitle' => $this->faker->name,
            'CreditHours' => $this->faker->randomNumber(),
            'MinStudents' => $this->faker->randomNumber(),
            'DepartmentId' => $this->faker->randomElement(Department::pluck('DepartmentId')->toArray(),),
        ];
    }
}
