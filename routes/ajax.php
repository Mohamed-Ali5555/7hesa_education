<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Ajax Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix(LaravelLocalization::setLocale())
    ->as('ajax.')
    ->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:teacher,web,student'])
    ->group(function () {
        Route::get('/Get_classrooms/{id}', 'AjaxController@getclassrooms')->name('classrooms');
        Route::get('/Get_Sections/{id}', 'AjaxController@Get_Sections')->name('sections');
        Route::get('/Get_Groups/{id}', 'AjaxController@Get_Groups')->name('groups');

        Route::get('/Get_Teacher/{id}', 'AjaxController@Get_Teacher');
        Route::get('/Get_section/{id}', 'AjaxController@Get_section');
    });

