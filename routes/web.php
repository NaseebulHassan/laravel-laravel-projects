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

Route::get('registration', 'StudentInfoController@registration');
Route::get('Qualification', 'QualificationinfoController@index');
Route::post('Qualification', 'QualificationinfoController@store');
Route::get('step3', 'StudentInfoController@step3');
Route::get('step4', 'StudentInfoController@step4');
Route::post('/enrollment/studentRegistration/registration', 'StudentInfoController@store');
Route::get('course', 'CourseController@create');
Route::post('/course', 'CourseController@store');
Route::get('/course', 'CourseController@index');
Route::get('course/{id}/edit', 'CourseController@edit');
Route::get('/course/update', 'CourseController@update');
;

Route::get('enrollment/{id}/course', 'CourseController@destroy');


Route::get('enrollment', 'EnrollmentController@enrollment');
Route::get('instructor','InstructorController@instructor');
Route::post('/enrollment/instructor','InstructorController@store');
Route::get('studentEnroll','EnrollmentController@studentEnroll');
Route::get('offeredCourses','EnrollmentController@offeredCourses');
Route::get('attendence','AttendenceController@attendence');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');