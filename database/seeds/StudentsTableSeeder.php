<?php

use App\Enums\Gender;
use App\Models\Grade;
use App\Models\Section;
use App\Models\Student;
use App\Models\Classroom;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = new Student();
        // --------------------------------------------------- \\
        $students->name = ['ar' => 'احمد ابراهيم', 'en' => 'Ahmed Ibrahim'];
        $students->email = 'student@admin.com';
        $students->Date_Birth = date('1995-01-01');
        $students->password = bcrypt("123456");
        $students->academic_year = '2021';
        // --------------------------------------------------- \\
        $students->grade_id = 1;
        $students->classroom_id = 1;
        $students->section_id = 1;
        // --------------------------------------------------- \\
        // $students->teacher_id = Teacher::inRandomOrder()->value('id');
        $students->gender = Gender::MALE;
        // --------------------------------------------------- \\
        $students->active = 1;
        $students->save();
    }
}
