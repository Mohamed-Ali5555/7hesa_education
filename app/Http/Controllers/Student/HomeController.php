<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class HomeController extends Controller
{
    // public function __invoke(Request $request)
    // {
    //     return view('students.pages.home');
    // }

    public function showCalendar()
    {
        $studentId = auth()->user()->id;
    
        // استرجاع المجموعات التي اشترك فيها الطالب مع الأيام المرتبطة بها
        $groups = Student::find($studentId)->groups()->with('days')->get();
        
        $lessons = collect();
     


        
        foreach ($groups as $group) {
            foreach ($group->days as $day) {
                // $matched = false;  // متغير لتحديد ما إذا كان هناك تطابق
                // foreach ($group->days as $day) {
                //     if($day->name == now()->format('l')) {
                //         $matched = true;  // يوجد تطابق
                //         break;  // إنهاء الحلقة بعد العثور على تطابق
                //     }
                // }
            
                // if ($matched) {
                //     dd(now()->format('l'));
                // } else {
                //     dd('No match for today: ' . now()->format('l'));
                // }

             
 



                if ($day->name == now()->format('l')) { // `l` يرجع اسم اليوم الحالي
                    $lessons->push([
                        'title' => 
                        // '$group->course->name .' . 
                        $group->name,
                        'start' => now()->toDateString(),
                        'teacher' => $group->teacher->name,
                    ]);
                }
            }
        }
    // return $lessons;
        // return view('students.calendar', compact('lessons'));
                return view('students.pages.home', compact('lessons'));

    }
    
}
