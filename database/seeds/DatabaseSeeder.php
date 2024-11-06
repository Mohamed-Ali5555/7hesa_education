<?php

use Illuminate\Database\Seeder;
use Database\Seeders\TeacherSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // -------------------------------------------------- \\
        $this->call(UserSeeder::class);
        $this->call(GradeSeeder::class);
        // -------------------------------------------------- \\
        $this->call(ClassroomTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        // -------------------------------------------------- \\
        $this->call(religionTableSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(DaySeeder::class);
        // -------------------------------------------------- \\
        $this->call(StudentsTableSeeder::class);
        $this->call(SpecializationsTableSeeder::class);
        // -------------------------------------------------- \\
        $this->call(FeatureSeeder::class);
        // -------------------------------------------------- \\
        $this->call(QuizSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(GroupSeeder::class);
        // -------------------------------------------------- \\
    }
}
