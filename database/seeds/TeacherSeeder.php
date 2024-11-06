<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Day;
use App\Enums\Gender;
use App\Models\Group;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\TeacherPlan;
use App\Enums\GroupVisibility;
use App\Models\Specialization;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Laravelcm\Subscriptions\Interval;
use Laravelcm\Subscriptions\Models\Feature;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $teacher = tap(Teacher::create([
            'email' => "amroldfox1@gmail.com",
            'password' => bcrypt('123'),
            'name' => ['ar' => 'Amr', 'en' => 'عمرو'],
            'Address' => 'AAAAAAAAA',
            'Joining_Date' => date('y-m-d'),
            'active' => 1,
            'gender' => Gender::MALE,

            'teacher_id' => str()->random(40),
            'grade_id' => 1,
            'subject_id' => Subject::inRandomOrder()->value('id'),
            'classroom_id' => 1,
            'section_id' => 1,
            'Specialization_id' => Specialization::inRandomOrder()->value('id')
        ]));
        // $teacher->save();

        $factory = (new Factory)->create();
        // dd(
        //     $teacher
        // );
        $teacher = Teacher::first();
        // $teacher->groups()->saveMany();
        $group = Group::create(
            [
                'class_id' => $teacher->classroom_id,
                'name' => $teacher->name,
                'teacher_id' => $teacher->id,
                'visibility' => GroupVisibility::PUBLIC ,
                'start_at' => $factory->date(),
                'end_at' => $factory->date(),
                'status' => true,
            ]
        );
        // $group = ;

        $group->days()->sync(Day::inRandomOrder()->take(3)->pluck('id'));
        $group->enrolledStudents()->attach(Student::value('id'));

        // TeacherPlan::create([
        //     'name' => [
        //         'ar' => 'Questions',
        //         'en' => 'اسئله فقط',
        //     ],
        //     'price' => 9.99,
        //     'signup_fee' => 0,
        //     'invoice_period' => 1,
        //     'invoice_interval' => Interval::MONTH->value,
        //     'trial_period' => 3,
        //     'trial_interval' => Interval::DAY->value,
        //     'sort_order' => 1,
        //     'currency' => 'AED',
        //     'teacher_id' => $Teacher->id,
        // ]);
        // TeacherPlan::create([
        //     'name' => [
        //         'ar' => 'دروس و اسئله',
        //         'en' => 'Lessons and questions',
        //     ],
        //     'currency' => 'AED',
        //     'price' => 25,
        //     'signup_fee' => 0,
        //     'invoice_period' => 1,
        //     'invoice_interval' => Interval::MONTH->value,
        //     'trial_period' => 15,
        //     'trial_interval' => Interval::DAY->value,
        //     'sort_order' => 1,
        //     'teacher_id' => $Teacher->id,

        // ]);
        // $plan1 = TeacherPlan::create([
        //     'name' => [
        //         'ar' => 'دروس فقط',
        //         'en' => 'Lessons',
        //     ],
        //     'currency' => 'AED',
        //     'price' => 25,
        //     'signup_fee' => 0,
        //     'invoice_period' => 1,
        //     'invoice_interval' => Interval::MONTH->value,
        //     'trial_period' => 15,
        //     'trial_interval' => Interval::DAY->value,
        //     'sort_order' => 1,
        //     'teacher_id' => $Teacher->id,
        // ]);
        // new Feature(['name' => 'Lessonss', 'value' => 50, 'sort_order' => 1,'teacher_plan_id' => $plan1->id]);

    }
}
