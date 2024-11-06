<?php


use App\Models\{
    Quizze,
    Subject,
    Specialization,
    Teacher
};
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $hours = 2;
        $minutes = 30;
        Quizze::create([
            'name' => ['en' => 'Exam 1 ', 'ar' => 'الاختبار الاول'],
            'subject_id' => 1,
            'time' => sprintf("%d:%02d", $hours, $minutes),
            'teacher_id' => Teacher::inRandomOrder()->value('id'),
            'grade_id' => 1,
            'section_id' => 1,
            "marks" => 10,
            "totalmarks" => 50,
            "classroom_id" => 1,
            // "subject_id" => 1,

        ]);
    }
}
