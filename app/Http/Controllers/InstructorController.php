<?php

namespace App\Http\Controllers;

use App\instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $instructors=instructor::all();
        return view('enrollment.instructor', compact('instructors'));
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
        $create=instructor::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'cellno'=>$request->cellno,
            'type'=>$request->type,
            'department'=>$request->department,
        ]);   
        if($create){
            return redirect('/instructor')->with('message', 'submitted successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function show(instructor $instructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instructors=instructor::find($id);
        return view('enrollment.edit_teacher',compact('instructors','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      

        $instructor = instructor::find($id);
        $instructor->name = $request->name; 
        $instructor->email     = $request->email;
        $instructor->cellno     = $request->cellno;
        $instructor->type     = $request->type;
        $instructor->department     = $request->department;
        $instructor->save();

        return redirect('instructor/')->with('success' , 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instructor=instructor::find($id);
        $deleted=$instructor->delete();
        if($deleted){
         return redirect('/instructor')->with('message', 'submitted successfully'); 
         } 
    }
}
