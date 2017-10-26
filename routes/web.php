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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/students', 'StudentsController@index')->name('students');
    Route::get('/students/create', 'StudentsController@create')->name('student.create');
    Route::post('/students/create', 'StudentsController@store')->name('student.store');
    Route::get('/students/{id}', 'StudentsController@detail')->name('student.detail');

    Route::get('/behavior/create/{id?}', 'BehaviorsController@create')->name('behavior.create');
    Route::post('/behavior/create/{id?}', 'BehaviorsController@store')->name('behavior.store');
});
