<?php

use App\Models\Classroom;
use App\Models\Grade;
use Illuminate\Database\Seeder;

class ClassroomTableSeeder extends Seeder
{

    public function run()
    {

        $classrooms = [
            ['en' => 'First grade', 'ar' => 'الصف الاول'],
            ['en' => 'Second grade', 'ar' => 'الصف الثاني'],
            ['en' => 'Third grade', 'ar' => 'الصف الثالث'],
        ];

        $grades = Grade::get();
        
        foreach ($grades as $grade) {

            foreach ($classrooms as $classroom) {
                Classroom::create([
                    'Name_Class' => $classroom,
                    'grade_id' => $grade->id
                ]);
            }

        }
    }
}
