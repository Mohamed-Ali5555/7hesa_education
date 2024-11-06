<?php

use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\PaypalController;
use App\Http\Controllers\Admin\StudentController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// payment by paypal
// Route::get('/paypal-payment', 'PaypalController@payment')->name('paypal.payment');
// Route::get('/paypal-success', 'PaypalController@success')->name('paypal.success');
// Route::get('/paypal-cancel', 'PaypalController@payment')->name('paypal.cancel');

Route::post('paypal-payment', [PaypalController::class, 'create'])->name('payment.paypal');
Route::get('payment/success', [PaypalController::class, 'success'])->name('payment.success');
Route::get('payment/cancel', [PaypalController::class, 'cancel'])->name('payment.cancel');



Route::post('/process-payment', [PaymentController::class, 'processPayment'])->name('payment.process');
Route::get('/payment-success', [PaymentController::class, 'paymentSuccess'])->name('payment.success');
// end payment paypal
//Auth::routes([
//    'login' => false,
//]);

Route::get('/', 'HomeController@index')->name('home');
Route::put('/continue-register-student/{id}', [RegisterController::class, 'continue_register'])->name('register.continue_register');
Route::put('/continue-register-teacher/{id}', [RegisterController::class, 'continue_register_teacher'])->name('register.continue_register_teacher');

Route::group(['namespace' => 'Auth'], function () {

    Route::get('/login/{type}', 'LoginController@loginForm')->middleware('guest')->name('login.show');
    Route::post('/login', 'LoginController@login')->name('login')->middleware(['guest', ProtectAgainstSpam::class]);
    Route::post('/logout/{type}', [LoginController::class, 'logout'])->name('logout');

    //route register
    Route::get('/register/{type}', 'RegisterController@showRegisterForm');
    Route::post('/register/{type}', 'RegisterController@create')->middleware([ProtectAgainstSpam::class]);
    Route::view('/registerSuccess', 'auth.register.registerSuccess')->name('register_success');

    Route::get('/updateInfo/{type}', 'RegisterController@completeRegistration')->name('complete_register');
    Route::post('/updateInfo/{type}', 'RegisterController@successUpdate')->middleware(['guest', ProtectAgainstSpam::class])->name('updateInfo.successUpdate');

    //route reset password

    Route::get('/resetpass/{type}', 'ForgotPasswordController@reset')->name('reset.pass');
    Route::get('/reset/{type}', 'ForgotPasswordController@resetForm');
    Route::post('/reset/{type}', 'ForgotPasswordController@passUpdate')->middleware(['guest', ProtectAgainstSpam::class])->name('reset.passUpdate');
    Route::post('/password/email/{type}', 'ForgotPasswordController@sendEmail')->middleware(['guest', ProtectAgainstSpam::class])->name('reset.send');
    
    

});
//==============================Translate all pages============================
Route::prefix('laravel-filemanager')->group(function () {
    Lfm::routes();
});


