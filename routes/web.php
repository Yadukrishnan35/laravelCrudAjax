<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('student-reg','App\Http\Controllers\studentController@register')->name('student.student_reg');
Route::post('student-save','App\Http\Controllers\studentController@saveStudent')->name('student.student_save');
Route::get('student-view','App\Http\Controllers\studentController@viewStudent')->name('student.student_view');
Route::get('/edit-student/{student_id}','App\Http\Controllers\studentController@getStudent')->name('student.editStudent');


