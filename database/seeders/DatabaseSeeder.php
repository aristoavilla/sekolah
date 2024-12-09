<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Major;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Major::factory(10)->create();  
        
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        Student::factory(10)->create();

        $this->call([
            MajorSeeder::class, // Majors should come first as other entities like classrooms may depend on them.
            TeacherSeeder::class, // Teachers should be seeded before entities like classrooms and extracurriculars.
            ClassroomSeeder::class, // Classrooms rely on majors and possibly teachers.
            StudentSeeder::class, // Students can now be seeded as classrooms exist.
            SubjectSeeder::class, // Subjects can be independent but may be required for teachers or posts.
            ExtracurricularSeeder::class, // Extracurriculars can be seeded now that students and teachers exist.
            PrincipalSeeder::class, // Principals may depend on teachers or other entities.
            PostSeeder::class, // Posts should come last as they may depend on students, teachers, and other entities.
        ]);        
    }
}
