<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Facades\CauserResolver;

class SetAuthenticatedUserPrefernce
{
    public function handle(Request $request, Closure $next)
    {

        $defaultTimezone = config('app.timezone');
        $timezone = $defaultTimezone;
        $guards = ['web','student','teacher','admin']; 
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {

                $user = Auth::guard($guard)->user();
                CauserResolver::setCauser($user);
                $timezone = $user->timezone ?? $defaultTimezone;
                break;
            }
        }

        // Set the application timezone
        config(['app.timezone' => $timezone]);
        date_default_timezone_set($timezone);
        Carbon::setLocale($timezone);

        return $next($request);
    }
}
