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

Route::get('/', 'Studentcontroller@index');


Route::pattern('student_no','s[0-9]{10}');
Route::group(['prefix'=>'students'],function (){

    Route::get('{student_no}', 'Studentcontroller@getStudentData')->name('students');

    Route::get('{student_no}/score/{subject?}', 'Studentcontroller@getStudentScore')->where(['subject'=>'(chinese|english|math)'])->name('students.score');
});

