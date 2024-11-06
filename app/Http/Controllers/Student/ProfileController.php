<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function index()
    {
        $information = auth()->user();
        return view('students.pages.profile', compact('information'));
    }

    public function update(Request $request)
    {
        $student = auth('student')->user();
        $newData = [
            'name' => ['en' => $request->Name_en, 'ar' => $request->Name_ar]
        ];
        if (! empty($request->password)) {
            $newData['password'] = Hash::make($request->password);
        }
        $student->update($newData);

        toastr()->success(trans('messages.Update'));

        return redirect()->back();
    }


}
