<?php

namespace Database\Factories;

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
            'GPA' => $this->faker->randomFloat(2,1, 4),
            'HoursAchieved'=> $this->faker->numberBetween(0,120),
            'PersonId' => $this->faker->numberBetween(1,10)
        ];
    }
}
