<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Section;
use App\Models\Group;

use App\Models\Teacher;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    // Get classrooms
    public function getclassrooms($id)
    {
        $classes = Classroom::where("grade_id", $id)->select("Name_Class", "id")->get();
        // dd(
        // );
        return $classes->pluck("Name_Class", "id");
        // return $classes;

    }

    //Get Sections
    public function Get_Sections($id){

        return Section::where("class_id", $id)->pluck("name", "id");

    }
    
     public function Get_Groups($id){

        return Group::where("class_id", $id)->pluck("name", "id");

    }
    public function Get_Teacher($id){

        return Teacher::where("section_id", $id)->pluck("name", "id");

    }
    public function Get_section($id){

        return Section::where("grade_id", $id)->pluck("name", "id");

    }
}
