<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\HomeController;
use App\Http\Controllers\Teacher\GroupController;
use App\Http\Controllers\Teacher\ProfileController;
use App\Http\Controllers\Teacher\CompeleteTeacherController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


//==============================Translate all pages============================
Route::prefix(LaravelLocalization::setLocale())
    ->namespace('Teacher')
    ->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
    ->group(
        function () {
            //==============================dashboard============================
            Route::prefix('teacher/')->as('teacher.')->group(function () {
                Route::middleware(['auth:teacher', 'authorized.teacher'])->group(function () {

                    Route::get('/', HomeController::class)->name('home');
                    //==============================students============================
                    Route::get('student', 'StudentController@index')->name('student.index');
                    Route::get('sections', 'StudentController@sections')->name('sections');
                    Route::post('attendance', 'StudentController@attendance')->name('attendance');
                    Route::post('edit_attendance', 'StudentController@editAttendance')->name('attendance.edit');
                    Route::get('attendance_report', 'StudentController@attendanceReport')->name('attendance.report');
                    Route::post('attendance_report', 'StudentController@attendanceSearch')->name('attendance.search');


                    // Resource routes
                    Route::prefix('teacher/quizzes')->as('quizzes.')->controller('QuizzController')->group(function () {
                        Route::get('/', 'index')->name('index');
                        Route::get('create', 'create')->name('create');
                        Route::get('question_bank', 'questionBank')->name('question_bank.create');
                        Route::post('qs_bank', 'questionBankStore')->name('question_bank.store');
                        Route::post('/', 'store')->name('store');
                        Route::get('{quiz}', 'show')->name('show');
                        Route::get('{quiz}/edit', 'edit')->name('edit');
                        Route::put('{quiz}', 'update')->name('update');
                        Route::delete('{quiz}', 'destroy')->name('destroy');
                    });
                    Route::prefix('teacher/packages')->as('package.')->controller('PackageController')->group(function () {
                        Route::get('/', 'index')->name('index');
                        Route::get('create', 'create')->name('create');

                        Route::post('/', 'store')->name('store');
                        Route::get('{package}', 'show')->name('show');
                        Route::get('{package}/edit', 'edit')->name('edit');
                        Route::put('{id}', 'update')->name('update');
                        Route::delete('{package}', 'destroy')->name('destroy');
                    });
                    Route::prefix('teacher/coupon')->as('coupon.')->controller('CouponController')->group(function () {
                        Route::get('/', 'index')->name('index');
                        Route::get('create', 'create')->name('create');
                        Route::post('/', 'store')->name('store');
                        Route::get('{id}', 'show')->name('show');
                        Route::get('{id}/edit', 'edit')->name('edit');
                        Route::put('{id}', 'update')->name('update');
                        Route::delete('{id}', 'destroy')->name('destroy');
                    });

                    Route::prefix('teacher/payments')->as('payment.')->controller('PaymentController')->group(function () {
                        Route::get('/', 'index')->name('index');
                        Route::patch('/update_status/{id}', 'update_status')->name('update_status');

                        // Route::post('update_status', 'QuizzController@update_status')->name('repeat.quizze');

                    });
                    Route::prefix('groups')->as('groups.')->controller(GroupController::class)->group(function () {
                        Route::get('/', 'index')->name('index');
                        Route::get('create', 'create')->name('create');

                        Route::post('/', 'store')->name('store');
                        Route::get('{group}', 'show')->name('show');
                        Route::get('{group}/settings/', 'settings')->name('settings');
                        Route::post('{group}/times/', 'timeUpdate')->name('settings.times.update');
                        Route::get('{group}/edit', 'edit')->name('edit');
                        Route::put('{group}', 'update')->name('update');
                        Route::delete('{group}', 'destroy')->name('destroy');
                    });



                    Route::prefix('questions')->as('questions.')->controller('QuestionController')->group(function () {
                        Route::get('/', 'index')->name('index');
                        Route::get('create', 'create')->name('create');
                        Route::post('/', 'store')->name('store');
                        Route::get('{question}', 'show')->name('show');
                        Route::get('{question}/edit', 'edit')->name('edit');
                        Route::put('{question}', 'update')->name('update');

                        Route::delete('quiz/{quiz}/{question}', 'destroy')->name('destroy');
                    });


                    #######################################
                    Route::post('/lessons/{online_class}/activate', 'OnlineZoomClassesController@activateLesson')->name('online_sessions.activate');
                    // Route::post('/lessons/{online_class}/join', 'OnlineZoomClassesController@joinLesson')->name('online_sessions.joinLesson');
                    Route::get('/lessons/{online_class}', 'OnlineZoomClassesController@showlink')->name('online_sessions.showlink');
             
                    Route::post('/lessons/{online_class}/open', 'OnlineZoomClassesController@openMeeting')->name('online_classes.open');
                    Route::post('/lessons/{online_class}/close', 'OnlineZoomClassesController@closeMeeting')->name('online_classes.close');

                    #######################################

                    Route::resource('online_sessions', 'OnlineZoomClassesController');
                    Route::get('/indirect', 'OnlineZoomClassesController@indirectCreate')->name('indirect.create');
                    Route::post('/indirect', 'OnlineZoomClassesController@storeIndirect')->name('indirect.store');
                    Route::get('student_quizze/{id}', 'QuizzController@student_quizze')->name('student.quizze');
                    Route::post('repeat_quizze', 'QuizzController@repeat_quizze')->name('repeat.quizze');

                    Route::prefix('profile/')->as('profile.')->controller(ProfileController::class)->group(function () {
                        Route::get('/', 'index')->name('show');
                        Route::post('/', 'update')->name('update');
                    });
                });
                Route::controller(CompeleteTeacherController::class)->prefix('completeTeacher/')->as('complete_register.')->group(function (){

                    Route::get('/{teacher_id}', 'index')->name('index');
                    Route::put('{teacher_id}', 'update')->name('update');

                });
                // Route::resource('completeTeacher', 'CompeleteTeacherController');
            });

            // });
        
        }
    );
