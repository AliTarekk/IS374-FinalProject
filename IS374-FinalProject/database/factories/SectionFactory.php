<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Staff;
use App\Models\Room;
use App\Models\Course;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Section>
 */
class SectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'MaxStudents' => $this->faker->randomNumber(),
            'Day' => $this->faker->dayOfWeek(),
            'Period' => $this->faker->randomNumber(),
            'StaffId' => $this->faker->randomElement(Staff::pluck('StaffId')->toArray()),
            'RoomNumber' => $this->faker->randomElement(Room::pluck('RoomNumber')->toArray()),
            'CourseCode' => $this->faker->randomElement(Course::pluck('CourseCode')->toArray()),
        ];
    }
}
