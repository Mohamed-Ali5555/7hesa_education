<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Carbon;
use App\Providers\RouteServiceProvider;
use Spatie\Activitylog\Facades\CauserResolver;

class RedirectIfAuthenticated
{

    public function handle($request, Closure $next)
    {
        if (auth('web')->check()) {
            return to_route('admin.dashboard');
        }

        if (auth('student')->check()) {
            return to_route('student.dashboard.home');
        }

        if (auth('teacher')->check() && auth('teacher')->user()->active) {
            return to_route('teacher.home');
        }

        return $next($request);
    }
}
