<?php

use App\Models\Group;
use App\Models\Teacher;
use App\Models\Classroom;
use App\Enums\GroupVisibility;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    public function run()
    {
        $group = Group::create([
            'class_id' => Classroom::inRandomOrder()->value('id'),
            'name' => 'مجموعة طلاب علمي رياضه',
            'visibility' => GroupVisibility::PRIVATE ->value,
            'start_at' => today()->toDateString(),
            'end_at' => today()->addDays(5)->toDateString(),
            'teacher_id' => Teacher::inRandomOrder()->value('id'),
            'status' => true,
        ]);
        $group->days()->sync([1, 2, 3, 4]);

    }
}
