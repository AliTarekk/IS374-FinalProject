<?php

namespace Database\Seeders;

use App\Models\Enroll;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class enrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Enroll::factory(10)->create();
    }
}
