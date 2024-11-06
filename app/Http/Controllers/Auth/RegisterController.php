<?php

namespace App\Http\Controllers\Auth;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Providers\RouteServiceProvider;
use App\Services\Auth\AuthRegisterationService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct(private readonly AuthRegisterationService $authRegisterationService)
    {
        $this->middleware('guest')->except('continue_register','continue_register_teacher');
    }
    public function continue_register_teacher(Request $request, $id)
    {
       
        // Validate incoming request data
        // $request->validate([
        //     'Date_Birth' => 'required|date',
        //     'academic_year' => 'required|integer',
        //     'grade_id' => 'required|integer',
        //     'classroom_id' => 'required|integer',
        //     'section_id' => 'nullable|integer', // Assuming section_id is optional
        // ]);
    // 
        // Find the Teacher by ID
        $Teacher = Teacher::where('id',$id)->first();
        // return $Teacher;
        if (!$Teacher) {
            return redirect()->back()->with('error', 'Teacher not found');
        }
    
        // Update the Teacher record
        $Teacher->update([
            'Joining_Date' => $request->Joining_Date,
            'address' => $request->address,
            'grade_id' => $request->grade_id,
            'classroom_id' => $request->classroom_id,
            'section_id' => $request->section_id,
            'status_login' => 1,
        ]);
    // return 'g';
        // Redirect with a success message
        // return redirect()->route('Teacher.dashboard.sessions.index')->with('success', 'Update successful');
                return redirect()->back()->with('success', 'Update successful');

    }
    public function continue_register(Request $request, $id)
    {
        // Validate incoming request data
        $request->validate([
            'Date_Birth' => 'required|date',
            'academic_year' => 'required|integer',
            'grade_id' => 'required|integer',
            'classroom_id' => 'required|integer',
            'section_id' => 'nullable|integer', // Assuming section_id is optional
        ]);
    
        // Find the student by ID
        $student = Student::where('id',$id)->first();
        // return $student;
        if (!$student) {
            return redirect()->back()->with('error', 'Student not found');
        }
    
        // Update the student record
        $student->update([
            'Date_Birth' => $request->Date_Birth,
            'academic_year' => $request->academic_year,
            'grade_id' => $request->grade_id,
            'classroom_id' => $request->classroom_id,
            'section_id' => $request->section_id,
            'status_login' => 1,
        ]);
    // return 'g';
        // Redirect with a success message
        // return redirect()->route('student.dashboard.sessions.index')->with('success', 'Update successful');
                return redirect()->back()->with('success', 'Update successful');

    }
    
    public function showRegisterForm($type)
    {
        if ($type == 'student') {
            return view('auth.register', ['url' => $type]);
        } elseif ($type == 'teacher') {
            return view('auth.register', ['url' => $type]);
        } else {
            return view('auth.register.404');
        }
    }


    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'unique:students', 'unique:teachers'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    protected function create(Request $request, $type)
    {
        $this->validator($request->all())->validate();
        switch ($type) {
            case 'student':
                return $this->authRegisterationService->registerAsStudent($request);
            case 'teacher':
                return $this->authRegisterationService->registerAsTeacher($request);
        }
        abort(404);
    }
    
    public function completeRegistration(Request $request, $type)
    {
        if ($type == 'student') {
            $student = Student::where('student_id', $request->id)->where('active', 0)->firstOrFail();
            return view('students.pages.registration.complete', compact('student', 'type'));
        } elseif ($type == 'teacher') {
            $teacher = Teacher::where('teacher_id', $request->id)->where('active', 0)->firstOrFail();
            return view('teacher.pages.registration.complete', compact('teacher', 'type'));
        }
        return view('auth.register.404');

    }
    // public function successform(Request $request, $type)
    // {
    //     if ($type == 'student') {
    //         $successStudent = Student::where('student_id', $request->id)->get();
    //         return view('pages.Students.regsteration.completRegsteration');
    //     }
    // }

    public function successUpdate(Request $request, $type)
    {
        if ($type == 'student') {
            $student = Student::find($request->id);
            // $student->active = 1;
            $student->update([
                'active' => 1
            ]);
            return redirect()->route('home');
        } elseif ($type == 'teacher') {
            $teacher = Teacher::find($request->id);
            // $teacher->active = 1;
            $teacher->update([
                'active' => 1
            ]);
            return redirect()->route('home');
        }
        abort(404);
    }
}
