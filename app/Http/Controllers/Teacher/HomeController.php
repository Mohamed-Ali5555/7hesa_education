<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function __invoke()
    {
        // return auth()->user();
        // $teacher = auth()->user()->loadCount(['students','sections']);

        $data['count_sections'] = 0;
        $data['count_students'] = 0;

        return view('teacher.pages.dashboard', $data);
    }
}
