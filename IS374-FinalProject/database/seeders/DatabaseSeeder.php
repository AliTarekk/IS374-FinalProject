<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            PersonSeeder::class,
            StudentSeeder::class,
<<<<<<< HEAD
            FacultySeeder::class,
            DepartmentSeeder::class,
            CourseSeeder::class,
            enrollSeeder::class,

=======
            StaffSeeder::class,
>>>>>>> b4e4470f52a0c2d719b8bc9003341ff382d6b6d2
        ]);
    }
}
