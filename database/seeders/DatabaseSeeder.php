<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => '1234',
        ]);
        // User::factory(2)->create();
        // Student::factory(20)->create();
        $this->call([
            StudentSeeder::class,
        ]);

        Course::factory()->create([
            'courseName' => 'PHP',
            'courseID' => 'HTTP5225',
        ]);

        Course::factory()->create([
            'courseName' => 'JS',
            'courseID' => 'HTTP5226',
        ]);

        Course::factory()->create([
            'courseName' => 'MATH',
            'courseID' => 'HTTP5227',
        ]);

        Course::factory()->create([
            'courseName' => 'ENGLISH',
            'courseID' => 'HTTP5228',
        ]);

        Course::factory()->create([
            'courseName' => 'SCIENCE',
            'courseID' => 'HTTP5229',
        ]);

        Course::factory()->create([
            'courseName' => 'HISTORY',
            'courseID' => 'HTTP5230',
        ]);
    }
}
