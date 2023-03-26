<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(5)->create();

         $user = \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);

         $course1 = Course::factory()->create([
             'title' => 'Html and CSS',
             'description' => 'Learn Html & CSS in 3 Months',
             'image' => 'html-css.png',
             'teacher' => 'Mohammed Ali'
         ]);

        $course2 = Course::factory()->create([
            'title' => 'Learn PHP',
            'description' => 'Learn PHP language in 3 Months',
            'image' => 'php.png',
            'teacher' => 'Mohammed Ali'
        ]);

        $course3 = Course::factory()->create([
            'title' => 'Learn Laravel',
            'description' => 'Learn Laravel Framework in 3 Months',
            'image' => 'laravel.png',
            'teacher' => 'Mohammed Ali'
        ]);

        $user->courses()->syncWithoutDetaching([$course1->id, $course2->id]);
    }
}
