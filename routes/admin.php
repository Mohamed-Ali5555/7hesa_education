<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PackageController;

use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\OnlineZoomClassesController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Admin\ActivityLog\ActivityLogController;



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:admin'],
        'namespace' => 'Admin'
    ],
    function () {
        Route::prefix('admin')->as('admin.')->group(function () {
            //==============================dashboard============================
            Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

            //==============================dashboard============================
            Route::resource('grades', 'GradeController');

            Route::controller(ActivityLogController::class)->prefix('/logs')->as('logs.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('{log}', 'show')->name('show');
            });
            // Route::group(['namespace' => 'grades'], function () {
            // });
    



            //==============================classrooms============================
            Route::resource('classrooms', 'ClassRoomController');
            Route::post('delete_all', 'ClassRoomController@delete_all')->name('delete_all');
            Route::post('Filter_Classes', 'ClassRoomController@Filter_Classes')->name('Filter_Classes');
            //============================== Coupon ============================
            Route::controller(CouponController::class)->prefix('coupon')->as('coupon.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('/', 'store')->name('store');
                Route::get('{coupon}', 'show')->name('show');
                Route::get('{coupon}/edit', 'edit')->name('edit');
                Route::put('{coupon}', 'update')->name('update');
                Route::delete('{coupon}', 'destroy')->name('destroy');
            });


            Route::controller(PackageController::class)->prefix('package')->as('package.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('/', 'store')->name('store');
                Route::get('{package}', 'show')->name('show');
                Route::get('{package}/edit', 'edit')->name('edit');
                Route::put('{package}', 'update')->name('update');
                Route::delete('{package}', 'destroy')->name('destroy');
            });
            // payments
            Route::get('/payment', 'HomeController@payments')->name('payment_details');
            // Route::patch('/update_status/{id}', 'PaymentController@update_status')->name('update_status');

            // payments
            //==============================Sections============================
            Route::resource('Sections', 'SectionController');
            Route::get('/classes/{id}', 'SectionController@getclasses')->name('classes.filter');
            //==============================parents============================
    
            Route::view('add_parent', 'livewire.show_Form')->name('add_parent');

            //==============================Teachers============================
            Route::resource('Teachers', 'TeacherController');
            // Route::group(['namespace' => 'Teachers'], function () {
            // });
    

            //==============================Students============================
            Route::as('student.')->prefix('students/')->group(function () {
                // Route::->group(function () {
                // Resource routes
                Route::controller(StudentController::class)->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('create', 'create')->name('create');
                    Route::post('/', 'store')->name('store');
                    Route::get('show/{student}', 'show')->name('show');
                    Route::get('{student}/edit', 'edit')->name('edit');
                    Route::put('{student}', 'update')->name('update');
                    Route::delete('{student}', 'destroy')->name('destroy');
                });

                // Custom routes for attachments
                // Route::post('Upload_attachment', 'StudentController@Upload_attachment')->name('Upload_attachment');
                // Route::get('Download_attachment/{studentsname}/{filename}', 'StudentController@Download_attachment')->name('Download_attachment');
                // Route::post('Delete_attachment', 'StudentController@Delete_attachment')->name('Delete_attachment');
                // });
    
                Route::resource('online_classes', OnlineZoomClassesController::class);
                Route::get('indirect_admin', 'OnlineZoomClassesController@indirectCreate')->name('indirect.create.admin');
                Route::post('indirect_admin', 'OnlineZoomClassesController@storeIndirect')->name('indirect.store.admin');
                Route::resource('Graduated', 'GraduatedController');

                Route::resource('Attendance', 'AttendanceController');
                Route::get('download_file/{filename}', 'LibraryController@downloadAttachment')->name('downloadAttachment');
                Route::resource('library', 'LibraryController');
            });

            //==============================subjects============================
            Route::resource('subjects', 'SubjectController');
            //==============================Quizzes============================
            Route::resource('Quizzes', 'QuizzController');
            //==============================questions============================
            Route::resource('questions', 'QuestionController');
            //==============================Setting============================
            Route::resource('settings', 'SettingController');
        });
    }
);

