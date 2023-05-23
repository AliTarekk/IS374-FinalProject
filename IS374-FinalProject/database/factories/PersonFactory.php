<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'FirstName' => $this->faker->name(),
            'LastName' => $this->faker->name(),
            'email'  => $this->faker->email(),
            'Birthdate' => $this->faker->date(),
            'PersonType' => $this->faker->randomElement(['Student','Staff']),
            'Gender' => $this->faker->randomElement(['Male', 'Female']),



        ];
    }
}
