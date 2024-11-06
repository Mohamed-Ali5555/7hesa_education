<?php

namespace App\Services\Auth;

use App\Models\{Student, Teacher};

use App\Services\Location\LocationService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Auth;
class AuthRegisterationService
{

    public function __construct(
        private readonly LocationService $locationService
        )
    {

    }
    // public function registerAsStudent($request)
    // {
   
      
      
    //     // $randomUniqueToken = Str::random(40);


    //     // // Ensure uniqueness in the database
    //     // while (Student::where('student_id', $randomUniqueToken)->exists()) {
    //     //     $randomUniqueToken = Str::random(40);
    //     // }

    //     // // Log the generated token for debugging
    //     // Log::info('Generated Student ID: ' . $randomUniqueToken);

    //     $student_random = 'str' . $request->id . rand(1111,9999);

    //     $student = Student::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => bcrypt($request->password),
    //         'student_id' => $student_random,
    //         'active' => 0,
    //         // 'timezone' => $this->locationService->getUserInfo()->timezone ?? config('app.timezone'),
    //     ]);

    //     // Auth::guard('student')->login($student);



    //     $completeUrl = route('complete_register', [
    //         'type' => 'student',
    //         'id' => $student_random,
    //     ]);
        
    //     $data['url'] = $completeUrl;
    //     $data['name'] = $request->name;
    //     $data['email'] = $request->email;
    //     $data['title'] = 'التسجيل في موقع Board';
    //     $data['body'] = 'برجاء الضغط على الزرار ادناه لاستكمال عملية التسجيل';
        
    //     Mail::send('auth.register.regusterSuccessful', 
    //         $data,  // Correctly passing the $data array here
    //         function ($message) use ($data) {
    //             $message->to($data['email'])->subject($data['title']);
    //         }
    //     );
        
    //        return redirect()->route('login.show','student');

    //     // return redirect()->intended('home');
    // }


    public function registerAsStudent($request)
    {
        // إنشاء رقم عشوائي للطالب
        $student_random = 'str' . $request->id . rand(1111, 9999);
    
        // إنشاء سجل الطالب في قاعدة البيانات
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'student_id' => $student_random,
            'active' => 0,
            // 'timezone' => $this->locationService->getUserInfo()->timezone ?? config('app.timezone'),
        ]);
    
        // إعداد بيانات البريد الإلكتروني
        $completeUrl = route('complete_register', [
            'type' => 'student',
            'id' => $student_random,
        ]);
    
        $data = [
            'url' => $completeUrl,
            'name' => $request->name,
            'email' => $request->email,
            'title' => 'التسجيل في موقع حصه اونلاين',
            'body' => 'برجاء الضغط على الزرار أدناه لاستكمال عملية التسجيل'
        ];
    
        // إرسال البريد الإلكتروني باستخدام Mailtrap
        Mail::send('auth.register.regusterSuccessful', ['data' => $data], function ($message) use ($data) {
            $message->to($data['email'])->subject($data['title']);
        });
    
        // إعادة التوجيه إلى صفحة تسجيل الدخول
        return view('auth.register.registerSuccess');
    }
//     public function registerAsStudent($request)
//     {
//         $student_random = 'str' . $request->id . rand(1111,9999);

//         Student::create([
//             'name' => $request->name,
//             'email' => $request->email,
//             'password' => bcrypt($request->password),
//             'student_id' => $student_random,
//             'active' => 0,
//             // 'timezone' => $this->locationService->getUserInfo()->timezone ?? config('app.timezone'),
//         ]);

//         $completeUrl = route('student.dashboard.home', [
//             'type' => 'student',
//             // 'id' => $student_random,
//         ]);
// // dd('f');
//         $data['url'] = $completeUrl;
//         $data['name'] = $request->name;
//         $data['email'] = $request->email;
//         $data['title'] = 'التسجيل في موقع Board';
//         $data['body'] = 'برجاء الضغط على الزرار ادناه لاستكمال عملية التسجيل';

//         // Mail::send('auth.register.regusterSuccessful', ['data' => $data], function ($message) use ($data) {
//         //     $message->to($data['email'])->subject($data['title']);
//         // });
//         // return to_route('register_success');
//          return redirect()->route('login.show','student');

//     }



    // public function registerAsTeacher($request)
    // {
    //     $randomUniqueToken = 'str' . $request->id . rand(1111,9999);

    //     // $randomUniqueToken = Str::random(40);
    //     $teacher = Teacher::create([

    //         'name' => $request['name'],
    //         'email' => $request['email'],
    //         'password' => bcrypt($request['password']),
    //         'teacher_id' => $randomUniqueToken,
    //         'active' => 0,
    //         // 'timezone' => $this->locationService->getUserInfo()->timezone ?? config('app.timezone'),
    //     ]);

    //     $completeUrl = route('complete_register', [
    //         'type' => 'teacher',
    //         'id' => $randomUniqueToken,
    //     ]);

    //     $data = [
    //         'name' => $teacher->name,
    //         'email' => $teacher->email,
    //         'title' => 'التسجيل في موقع Board',
    //         'url' => $completeUrl,
    //         'body' => 'برجاء الضغط على الزرار ادناه لاستكمال عملية التسجيل',
    //     ];

    //     Mail::send('auth.register.regusterSuccessful', ['data' => $data], function ($message) use ($data) {
    //         $message->to($data['email'])->subject($data['title']);
    //     });

    //     // return to_route('register_success');

    //     return redirect()->route('login.show','teacher');

    // }



    public function registerAsTeacher($request)
    {
         $Id = Str::random(40);
         $teacher = Teacher::create([

            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'teacher_id' => $Id,
            'active' => 0,
            // 'timezone' => $this->locationService->getUserInfo()->timezone ?? config('app.timezone'),
        ]);

        $completeUrl = route('complete_register', [
            'type' => 'teacher',
            'id' => $Id,
        ]);

        $data = [
            'name' => $teacher->name,
            'email' => $teacher->email,
            'title' => 'التسجيل في موقع حصه اونلاين',
            'url' => $completeUrl,
            'body' => 'برجاء الضغط على الزرار ادناه لاستكمال عملية التسجيل',
        ];

        Mail::send('auth.register.regusterSuccessful', ['data' => $data], function ($message) use ($data) {
            $message->to($data['email'])->subject($data['title']);
        });
        return view('auth.register.registerSuccess');

        // return to_route('register_success');
    }
}