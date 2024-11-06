<?php

use App\Enums\BootstrapColors;
use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Section;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Specialization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecializationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $specializations = [
            ['en' => 'Arabic', 'ar' => 'عربي'],
            ['en' => 'Sciences', 'ar' => 'علوم'],
            ['en' => 'Computer', 'ar' => 'حاسب الي'],
            ['en' => 'English', 'ar' => 'انجليزي'],
        ];
        foreach ($specializations as $S) {
            Specialization::create(['Name' => $S]);
        }
        $subjects = [
            [
                'name' => ['en' => 'Arabic', 'ar' => 'عربي'],
                'color' =>
                    BootstrapColors::SUCCESS

                ,
                'icon' => 'fas fa-language'
            ],
            [
                'name' => ['en' => 'Sciences', 'ar' => 'علوم'],
                'color' =>
                    BootstrapColors::INFO,

                'icon' => 'fas fa-flask'
            ],
            [
                'name' => ['en' => 'Computer', 'ar' => 'حاسب الي'],
                'color' =>
                    BootstrapColors::PRIMARY,

                'icon' => 'fas fa-laptop-code'
            ],
            [
                'name' => ['en' => 'English', 'ar' => 'انجليزي'],
                'color' =>
                    BootstrapColors::SECONDARY,

                'icon' => 'fas fa-book'
            ]
        ];
        foreach ($subjects as $Sub) {
            Subject::create([
                'name' => $Sub['name'],
                'icon_code' => $Sub['icon'],
                'color_name' => $Sub['color'],
                'classroom_id' => Classroom::inRandomOrder()->value('id'),
                'section_id' => Section::inRandomOrder()->value('id'),
                'grade_id' => Grade::inRandomOrder()->value('id'),
            ]);
        }
    }
}
