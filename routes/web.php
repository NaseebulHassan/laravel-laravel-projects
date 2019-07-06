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

Route::get('/', function(){
    return view('admin.login.login');
});

Route::get('registration', 'StudentInfoController@index');
Route::post('registration', 'StudentInfoController@store');
Route::get('Qualification', 'QualificationinfoController@index');
Route::post('Qualification', 'QualificationinfoController@store');
Route::get('personalinfo', 'PersonalinfoController@index');
Route::post('personalinfo', 'PersonalinfoController@store');
Route::get('siblings', 'SiblingController@index');
Route::post('siblings', 'SiblingController@store');
Route::get('course', 'CourseController@create');
Route::post('/course', 'CourseController@store');
Route::get('/course', 'CourseController@index');
Route::get('course/{id}/edit', 'CourseController@edit');
Route::get('/course/{id}/update', 'CourseController@update');


Route::get('enrollment/{id}/course', 'CourseController@destroy');


Route::get('enrollment', 'EnrollmentController@enrollment');
Route::get('instructor','InstructorController@index');
Route::get('enrollment/{id}/instructor','InstructorController@destroy');
Route::post('enrollment/{id}/edit_teacher','InstructorController@edit');
Route::post('/enrollment/instructor','InstructorController@store');
Route::get('studentEnroll','EnrollmentController@index');
Route::post('StudentEnrollment','EnrollmentController@store');
Route::get('offeredCourses','OfferedCourseController@index');
Route::get('attendence','AttendenceController@attendence');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
