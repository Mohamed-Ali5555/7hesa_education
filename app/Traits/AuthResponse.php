<?php

namespace App\Traits;

use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;

trait AuthResponse
{
    protected function redirect($request)
    {
        // dd($request->type);
        return match ($request->type) {
            'student' => redirect()->intended(route('student.dashboard.home')),
            'teacher' => redirect()->intended(route('teacher.home')),
            'admin' => redirect()->intended(route('admin.dashboard')),

            default => redirect()->intended(RouteServiceProvider::HOME)
        };
    }
    /**
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function unAuthResponse($type): RedirectResponse
    {
        return to_route('login.show', ['type' => $type])->with('message', 'يوجد خطا في كلمة المرور او اسم المستخدم');
    }
    /**
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function notVerifiedEmailResponse($type): RedirectResponse
    {
        // dd( $type);
        return to_route('login.show', ['type' => $type])->with('message', 'عفوا لم يتم تاكيد البريد الالكتروني');
    }

}