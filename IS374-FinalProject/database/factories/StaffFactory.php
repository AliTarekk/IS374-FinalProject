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
            'EmploymentType' => $this->faker->randomElement(['PartTime', 'FullTime']),
            'PayRate'=> $this->faker->numberBetween(50,800),
            'Salary'=> $this->faker->numberBetween(5000,80000),
            'PersonId' => $this->faker->numberBetween(1,10)

        ];
    }
}
