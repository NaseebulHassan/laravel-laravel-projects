<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    //
    public function studentEnroll(){
        return view('enrollment.studentEnroll');
    }
    public function offeredCourses(){
        return view('enrollment.offeredCourses');
    }
    public function enrollment(){
        return view('enrollment.enrollment');
    }

}
