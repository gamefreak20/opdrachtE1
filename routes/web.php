<?php

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

Auth::routes();

Route::group(['middleware' => 'auth'], function ()
{

    Route::get('/logoutLink', 'GetRequestController@logoutLink');
    Route::resource('/', 'IndexController');
    Route::resource('/profile', 'ProfileController');
    Route::resource('/assignments', 'AssignmentsController');
    Route::resource('/classes', 'ClassesController');
    Route::resource('/groupe', 'GroupesController');
    Route::resource('/student', 'StudentsController');

    Route::get('/groupe/deleteStudent/{id}', 'GroupesController@deleteStudent');
    Route::post('/searchStudent', 'GroupesController@searchStudent');
});
