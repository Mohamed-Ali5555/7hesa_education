<?php

use App\Models\Day;
use App\Models\Grade;
use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    public function run()
    {
        $days = [
            'saturday',
            'sunday',
            'monday',
            'tuesday',
            'wednesday',
            'thursday',
            'friday'
        
        ];
        foreach ($days as $day) {
            Day::create(['name' => $day]);
        }

    }
}
