<?php

namespace App\Services\Auth;

use Illuminate\Support\Facades\Auth;
use App\Traits\AuthResponse;
use App\Models\{Student, Teacher};

class AuthService
{
    use AuthResponse;
    const TEACHER = 'teacher';
    const STUDENT = 'student';
    const ADMIN = 'admin';
    public function checkGuard($type)
    {
        $guards = [$this::STUDENT, $this::TEACHER];
        if (in_array($type, $guards)) {
            return $type;
        }
        return $this::ADMIN;
    }

    // public function loginAsStudent($request)
    // {
        
    //     if (Auth::guard($this::STUDENT)->attempt(['email' => $request->email, 'password' => $request->password])) {
    //         if (! auth($this::STUDENT)->user()->active) {
                
    //             // Provide the necessary $type argument
    //             return $this->notVerifiedEmailResponse($this::STUDENT);
    //         }
    //         return $this->redirect($request);
    //     }
    //     return $this->unAuthResponse($this::STUDENT);
    // }
    public function loginAsStudent($request)
    {
        // البحث عن الطالب باستخدام البريد الإلكتروني
        $student = Student::where('email', $request->email)->first();
    
        // التحقق مما إذا كان الحساب موجودًا وإذا كان نشطًا
        if ($student && ($student->active == 0 || !$student->active)) {
            // إعادة توجيه الطالب إلى صفحة تسجيل الدخول مع رسالة تنبيه
                return $this->notVerifiedEmailResponse($this::STUDENT);
            }
    
        // محاولة تسجيل الدخول باستخدام بيانات الطالب إذا كان الحساب نشطًا
        if (Auth::guard($this::STUDENT)->attempt(['email' => $request->email, 'password' => $request->password])) {
            // إعادة التوجيه بناءً على الطلب إذا كان الحساب نشطًا
            return $this->redirect($request);
        }
        
        // رد عند فشل تسجيل الدخول
        return $this->unAuthResponse($this::STUDENT);
    }
    
    public function loginAsAdmin($request)
    {
        if (Auth::guard($this::ADMIN)->attempt(['email' => $request->email, 'password' => $request->password])) {
            // dd( $request);

            return $this->redirect($request);

            // return redirect()->intended('admin/dashboard');

        }
        // return $this->unAuthResponse('web');
        \Log::warning('Failed login attempt:', ['email' =>$request->email]);
    
        return $this->unAuthResponse($this::ADMIN);
    }
    public function loginAsTeacher($request)
    {

        // dd( $request->all());
        $email = $request->email;
        $password = $request->password;
    
        // Log the email and password (make sure to not log passwords in production)
        \Log::info('Login attempt:', ['email' => $email, 'password' => $password]);
    
        if (Auth::guard($this::TEACHER)->attempt(['email' => $email, 'password' => $password])) {
        
        
            $user = auth($this::TEACHER)->user();
            
            // Log the authenticated user
            \Log::info('Authenticated user:', ['email' => $user->email, 'user_id' => $user->id]);
    
            if (!$user->active) {
                return $this->notVerifiedEmailResponse($this::TEACHER);
            }
            
            return $this->redirect($request);
        }
    
        \Log::warning('Failed login attempt:', ['email' => $email]);
    
        return $this->unAuthResponse($this::TEACHER);
    }
    
    

}
