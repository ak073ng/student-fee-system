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

//home page
Route::get('/', "HomeController@index");

//student form page
Route::get('/student', "StudentController@index");

//fee form page
Route::get('/fee', "FeeController@index");

//view records page
Route::get('/view', "ViewRecordsController@index");

//view student page
Route::get('/view/{student_id}', "ViewStudentController@index");


//process forms

//new student record
Route::post('/student', "StudentController@insertNewStudent");
//fee payment record
Route::post('/fee', "FeeController@insertNewFee");
//search student
Route::post('/search', "ViewRecordsController@getSearchedStudent");
