<?php

use App\Models\Grade;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    public function run()
    {
        $grades = [
            ['en'=> 'High school', 'ar'=> 'المرحلة الثانوية'],
        ];

        foreach ($grades as $grade) {
            Grade::create(['Name' => $grade]);
        }

    }
}
