<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('student', 'StudentController');
Route::get('login/{id}', 'RecordController@login');
Route::get('logout/{id}', 'RecordController@logout');

Route::resource('exam', 'ExamController');
Route::get('question', 'ExamController@questionPaper');
Route::post('paper/submit', 'ExamController@paperSubmit')->name('paper.submit');