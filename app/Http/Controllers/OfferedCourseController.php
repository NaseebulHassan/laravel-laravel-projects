<?php

namespace App\Http\Controllers;

use App\Offered_course;
use App\Degree;
use App\Course;
use App\Makrs_Div;

use Illuminate\Http\Request;

class OfferedCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $degrees=Degree::all(); 
        $courses=Course::all(); 
        $marks=Makrs_Div::all(); 
         return view('enrollment.offeredCourses',compact('degrees','courses','marks'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offered_course  $offered_course
     * @return \Illuminate\Http\Response
     */
    public function show(Offered_course $offered_course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offered_course  $offered_course
     * @return \Illuminate\Http\Response
     */
    public function edit(Offered_course $offered_course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offered_course  $offered_course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offered_course $offered_course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offered_course  $offered_course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offered_course $offered_course)
    {
        //
    }
}
