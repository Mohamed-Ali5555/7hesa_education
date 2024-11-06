<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Services\Auth\AuthService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginForm($type)
    {

        return view('auth.login', compact('type'));
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request, AuthService $authService): RedirectResponse
    {
            \Log::info('Attempting to login as student', ['request' => $request->all()]);

        return match ($request->type) {
                $authService::STUDENT => $authService->loginAsStudent($request),
                $authService::TEACHER => $authService->loginAsTeacher($request),
            default => $authService->loginAsAdmin($request),
        };

        // return $authService->unAuthResponse($request->type);
    }
    public function logout(Request $request, $type)
    {
        
        Auth::guard($type)->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
