<?php

namespace App\Http\Middleware;

use App\Models\Teacher;
use Closure;
use Illuminate\Http\Request;
use Spatie\Activitylog\Facades\CauserResolver;

class TeacherAuthorized
{

    public function handle(Request $request, Closure $next)
    {
        if (auth('teacher')->check()) {
            CauserResolver::setCauser(auth('teacher')->user());
            app()->singleton('auth_teacher', function () {
                return auth('teacher')->user();
            });

            if (! empty(auth('teacher')->user()->grade_id) && ! empty(auth('teacher')->user()->classroom_id) && ! empty(auth('teacher')->user()->section_id)) {
                return $next($request);
            }

            toastError(trans('app.must_complete_ur_info'));
            return to_route('teacher.complete_register.index', [
                'teacher_id' => auth('teacher')->user()->teacher_id
            ]);
        }
        return abort(401);
    }
}
