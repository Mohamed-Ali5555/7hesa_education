<?php

namespace App\Http\Controllers\Auth;


use App\User;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ForgetPassword;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;



    public function sendEmail(Request $request, $type){
        try {
            if($type == 'student'){
                $restdata = Student::where('email', $request->email)->get();
                if(count($restdata) > 0){
                    $token = Str::random(40);
                    $domain = URL::to('/');
                    $url = $domain.'/reset/'.$type.'?token='.$token;
                    $data['url'] = $url;
                    $data['email'] = $request->email;
                    $data['title'] = 'Password Reset';
                    $data['body'] = 'please click the botton to reset password page';

                    Mail::send('forgetPasswordMail', ['data'=>$data], function($message) use ($data){
                        $message->to($data['email'])->subject($data['title']);
                    });

                    $date = Carbon::now()->format('Y-m-d');

                    ForgetPassword::updateOrCreate(
                        ['email'=>$request->email],
                        [
                            'email'=>$request->email,
                            'token'=>$token,
                            'created_at'=>$date
                        ]
                    );
                    return view('auth.passwords.successPass');
                }else{
                    return back()->with('email is not extist');
                }
            }elseif ($type == 'teacher'){
                $restdata = Teacher::where('email', $request->email)->get();
                if(count($restdata) > 0){
                    $token = Str::random(40);
                    $domain = URL::to('/');
                    $url = $domain.'/reset/'.$type.'?token='.$token;
                    $data['url'] = $url;
                    $data['email'] = $request->email;
                    $data['title'] = 'Password Reset';
                    $data['body'] = 'please click the botton to reset password page';

                    Mail::send('forgetPasswordMail', ['data'=>$data], function($message) use ($data){
                        $message->to($data['email'])->subject($data['title']);
                    });

                    $date = Carbon::now()->format('Y-m-d');

                    ForgetPassword::updateOrCreate(
                        ['email'=>$request->email],
                        [
                            'email'=>$request->email,
                            'token'=>$token,
                            'created_at'=>$date
                        ]
                    );
                    return view('auth.passwords.successPass');
                }else{
                    return back()->with('email is not extist');
                }
            }elseif ($type == 'admin'){
                $restdata = User::where('email', $request->email)->get();
                if(count($restdata) > 0){
                    $token = Str::random(40);
                    $domain = URL::to('/');
                    $url = $domain.'/reset/'.$type.'?token='.$token;
                    $data['url'] = $url;
                    $data['email'] = $request->email;
                    $data['title'] = 'Password Reset';
                    $data['body'] = 'please click the botton to reset password page';

                    Mail::send('forgetPasswordMail', ['data'=>$data], function($message) use ($data){
                        $message->to($data['email'])->subject($data['title']);
                    });

                    $date = Carbon::now()->format('Y-m-d');

                    ForgetPassword::updateOrCreate(
                        ['email'=>$request->email],
                        [
                            'email'=>$request->email,
                            'token'=>$token,
                            'created_at'=>$date
                        ]
                    );
                    return view('auth.passwords.successPass');
                }else{
                    return back()->with('email is not extist');
                }
            }
        }catch(\Exception $e){
            return $e;
        }

    }
    public function reset($type){
        return view('auth.passwords.email',compact('type'));
    }
    public function resetForm(Request $request, $type){
        $resetData = ForgetPassword::where('token', $request->token)->get();
        if(isset($request->token) && count($resetData) > 0){
            if($type == 'student'){
                $student = Student::where('email', $resetData[0]['email'])->get();
                return view('auth.passwords.reset', compact('student', 'type'));
            }elseif ($type == 'teacher'){
                $teacher = Teacher::where('email', $resetData[0]['email'])->get();
                return view('auth.passwords.reset', compact('teacher', 'type'));
            }elseif ($type == 'admin'){
                $admin = User::where('email', $resetData[0]['email'])->get();
                return view('auth.passwords.reset', compact('admin', 'type'));
            }else{
                return 'not found';
            }
        }else{
            return view('auth.passwords.404', compact('type'));
        }
    }
    public function passUpdate(Request $request, $type){

        $request->validate([
            'password' => 'required|string|min:6|confirmed'
        ]);
        if($type == 'student'){
            $student = Student::find($request->id);
            $student->password = Hash::make($request->password);
            $student->update();
            ForgetPassword::where('email', $student->email)->delete();
            return view('auth.passwords.successful', compact('type'));
        }elseif ($type == 'teacher'){
            $teacher = Teacher::find($request->id);
            $teacher->password = Hash::make($request->password);
            $teacher->update();
            ForgetPassword::where('email', $teacher->email)->delete();
            return view('auth.passwords.successful', compact('type'));
        }

    }
}
