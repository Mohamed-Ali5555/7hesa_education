<?php

namespace App\Interfaces;

use App\Models\Teacher;

interface TeacherRepositoryInterface{

    // get all Teachers
    public function getAllTeachers();

    // Get specialization
    public function Getspecialization();

    // // Get Gender
    // public function GetGender();

    // Get Grade
    public function GetGrade();

    // Get ClassRoom
    public function GetClassRoom();

    //Get Sections
    public function GetSection();

    // StoreTeachers
    public function StoreTeachers($request);

    // StoreTeachers
    public function editTeachers($id);

    // UpdateTeachers
    public function UpdateTeachers($request);

    // DeleteTeachers
    public function DeleteTeachers($request);

}


