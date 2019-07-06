<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Enrollment;
use App\Session;
use App\studentinfo;
use App\Course;
use App\instructor;
use App\Department;
use App\Degree;

use Illuminate\Http\Request;
class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function studentEnroll(){
        return view('enrollment.studentEnroll');
    }
   
    public function enrollment(){
        return view('enrollment.enrollment');
    }
    public function index()
    {
        $sessions=Session::all();
        $students=studentinfo::all();
        $courses=Course::all();
        $instructors=instructor::all();
        $departments=Department::all();
        $degrees=Degree::all();
        
        return view('enrollment.studentEnroll',compact('sessions','students','courses','instructors','departments','degrees'));
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
       
            $enrolldate=$request->row[0]['Enrolldate'];
            $enrollsemester=$request->row[0]['Enrollsemester'];
            $session=$request->row[0]['Session'];
            $degree=$request->row[0]['Degree'];
            $student_name=$request->row[0]['Student_name'];
            $father_name=$request->row[0]['Father_name'];
            $Regno=$request->row[0]['Regno'];
            $section=$request->row[0]['Section'];
            $section=$request->row[0]['Ceased'];
            $approval=$request->row[0]['Approval'];
            $course_work=$request->row[0]['Course_work'];
            $synopsis=$request->row[0]['Synopsis'];
            $after_ceased=$request->row[0]['After_ceased'];
            $chalan_no=$request->row[0]['Chalan_no'];
            $chalan_amount=$request->row[0]['Chalan_amount'];
            $Remarks=$request->row[0]['Remarks'];
            $enroll_status=$request->row[0]['Enroll_status'];
            $rows =$request->input('row');
     foreach($rows as $row)
     {
           if(!empty($row['Student_name']))
           {
            $records []=array(
                'enrolldate'=>$enrolldate,
                'enrollsemester'=>$enrollsemester,
                'session'=>$session,
                'degree'=>$degree,
                'student_name'=>$student_name,
                'father_name'=>$father_name,
                'Regno'=>$Regno,
                'section'=>$section,
                'ceased'=>$Ceased,
                'approval'=>$approval,
                'course_work'=>$course_work,
                'synopsis'=>$synopsis,
                'after_ceased'=>$after_ceased,
                'chalan_no'=>$chalan_no,
                'chalan_amount'=>$chalan_amount,
                'Remarks'=>$Remarks,
                'enroll_status'=>$enroll_status,
                'Course_name'=>$row['Course_name'],
                'course_type'=>$row['Course_type'],
                'course_status'=>$row['Course_Status'],
                'credit_hours'=>$row['Credit_hours'],
                'course_incharge'=>$row['Course_incharge'],

 
            );
           };

          
           
     }
    
     Enrollment::insert($records);

     return redirect('studentEnroll')->with('message', 'submitted successfully');

    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function show(Enrollment $enrollment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function edit(Enrollment $enrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enrollment $enrollment)
    {
        //
    }
}
