<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $information = auth('teacher')->user();
        return view('teacher.pages.profile', compact('information'));
    }

    public function update(Request $request)
    {
        $teacher = auth('teacher')->user();

        $newData = [
            'name' => ['en' => $request->Name_en, 'ar' => $request->Name_ar]
        ];
        // if (! empty($request->password)) {
        //     $newData['password'] = Hash::make($request->password);
        // }
        $teacher->update($newData);

        toastr()->success(trans('messages.Update'));
        return redirect()->back();
    }
}
