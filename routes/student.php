<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\HomeController;
use App\Http\Controllers\Student\GroupController;
use App\Http\Controllers\Student\TeacherController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| student Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//==============================Translate all pages============================
Route::prefix(LaravelLocalization::setLocale())
    ->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:student'])
    ->group(function () {


        Route::namespace('Student')->as('student.dashboard.')->group(function () {

            Route::get('/complete/index/{student_id}', 'CompleteController@index')->name('complete.profile');
            // Route::get('/student/dashboard', HomeController::class)->name('home');
            Route::get('/student/dashboard', 'HomeController@showCalendar')->name('home');

            Route::post('/Students/complete', 'CompleteController@complete')->name('Students.complete');
            Route::get('student/sessions', 'OnlineClasseController@index')->name('sessions.index');
            Route::get('student/sessions/courses/{id}', 'OnlineClasseController@courses')->name('sessions.courses');
             //////////////////////////////////////////////////////////
             //////////////////////////////////////////////////////////
            // Route::post('student/sessions/courses/{online_classe}/request', 'OnlineClasseController@requestJoin')->name('sessions.requestJoin');
            Route::get('student/sessions/courses/{online_classe}/join', 'OnlineClasseController@joinLesson')->name('sessions.joinLesson');

             //////////////////////////////////////////////////////////
             //////////////////////////////////////////////////////////
            Route::controller('ExamsController')->prefix('student_exams')->as('exams.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('/', 'store')->name('store');
                Route::get('start/{student_exam}', 'start')->name('start');
                Route::get('{student_exam}', 'show')->name('show')->middleware('exam.is_valid');
                Route::post('{student_exam}/save_answer', 'saveAnswer')->name('saveanswer');
                Route::get('{student_exam}/edit', 'edit')->name('edit');
                Route::put('{student_exam}', 'update')->name('update');
                Route::delete('{student_exam}', 'destroy')->name('destroy');
                Route::get('showAnswer/{id}', 'showAnswer')->name('show_answer');
            });

            Route::controller(TeacherController::class)->prefix('teachers')->as('teachers.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('info/{teacher:id}', 'show')->name('show');
                // Route::get('{teacher}/groups', 'groups')->name('groups');
                Route::get('show-teacher-details/{teacher:id}', 'show_teacher_details')->name('show_teacher_details');
                 //////////////////
                Route::post('grade_search/ajax_search','ajax_search')->name('ajax_search');
                 ///////////////
                Route::get('info/package-details/{id}', 'package_details')->name('package_details');
                Route::post('info/coupon', 'applay_coupon')->name('applay_coupon');

            });
            Route::controller(GroupController::class)->prefix('groups')->as('groups.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('show/{group}', 'show')->name('show');
                Route::get('join/{group}', 'join')->name('join');
                // Route::get('{teacher}/groups', 'groups')->name('groups');
            });

            Route::controller('ProfileController')->prefix('student/profile')->as('profile.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::put('/update', 'update')->name('update');
            });

            Route::resource('complete', 'CompleteController');
        });
        Route::post('/payment', 'App\Http\Controllers\PaymentController@index')->name('payment.page');
        // Route::get('/success', 'App\Http\Controllers\PaymentController@success')->name('success');
        Route::post('/stripe', [App\Http\Controllers\PaymentController::class, 'stripePost'])->name('stripe.post');

   
    });
