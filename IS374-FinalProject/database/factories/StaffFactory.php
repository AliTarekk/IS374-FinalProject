<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Title' => $this->faker->randomElement(['Instructor', 'Professor','AssistantProfessor','AssociateProfessor']),
            'EmploymentType' => $this->faker->randomElement(['FullTime', 'PartTime']),
            'PayRate' => $this->faker->randomFloat(2, 0, 1000),
            'Salary' => $this->faker->randomFloat(2, 0, 100000),
            'PersonId' => $this->faker->randomNumber(),
        ];
    }
}
