<?php

namespace App\Http\Middleware;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{

    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if ( request()->routeIs('teacher.*')) {
                return route('login.show', ['type' => 'teacher']);
            }elseif( request()->routeIs('student.dashboard.*')){
                return route('login.show', ['type' => 'student']);
            }
            return route('home');
        }
    }
}
