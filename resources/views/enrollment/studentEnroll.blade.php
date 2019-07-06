<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../css/customstyle.css" rel="stylesheet">
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fonts/css/all.css">
    <title>CMS-BIKAT</title>
<style>
  h3{
      text-align:center;
      padding-right:30px;
  }

</style>
</head>

<body>

<div id="soft-all-wrapper">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    @include('admin.inc.header')
    @include('admin.inc.sidebar')
    
    <!-- /.navbar-static-side -->
</nav>

<div id="page-wrapper">
    <div class="panel panel-default">
        <div class="panel-heading ">Student Enrollment</div>
        <div class="panel-body">
           <form method="POST" action="{{url('StudentEnrollment')}}"  class="form">
           {{csrf_field()}}
               <div class="row1">
               <div class="enrol-col1">
                    <label for="">Enrolling Date</label>
                     <p><span id="datetime"></span> </p>  
                 </div>
                 <div class="enrol-col1">
                     <label for="">Semester (Enrolling in)</label>
                     <select name="row[0][Enrollsemester]" id="" class="form-control" required>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                         <option value="6">6</option>
                         <option value="7">7</option>
                         <option value="8">8</option>
                     </select>
                 </div>
              
                 <div class="enrol-col1">
                    <label for="">Semeter#</label>
                    <select name="row[0][Semester]" id="" class="form-control">
                    @foreach ($sessions as $session)
                          <option value="{{$session->id}}">{{$session->session}}</option>
                          @endforeach
                   
                    </select>
                 </div>

                 <div class="enrol-col1">
                    <img src="../images/face.png" alt="" width="150px;" height:"120px;" >
                 </div>
              </div>

              <!--------------Student Selection-------->

              <div class="row2">
                  <h3>Student Selection</h3>
                  <div class="row2-enrol-col1">
                  <label for="session">Session (Student Admitted in)</label>
                  <select name="row[0][Session]" id="" class="form-control" required>
                @foreach ($sessions as $session)
                          <option value="{{$session->id}}">{{$session->session}}</option>
                          @endforeach
                        </select>
                 </div>        
                 <div class="row2-enrol-col1">
                  <label for="Degree">Degree</label>
                  <select name="row[0][Degree]" id="" class="form-control" required>
                  <option value="">N/A</option>
                        @foreach($degrees as $degree)
                        <option value="{{$degree->degree}}">{{$degree->degree}}</option>
                        @endforeach
                     </select>
                 </div>
                 <div class="row2-enrol-col2">
                  <label for="Student Name">Student Name</label>
                  <select name="row[0][Student_name]" id="" class="form-control" required>
                @foreach ($students as $student)
                          <option value="{{$student->name}}">{{$student->name}}</option>
                          @endforeach
                        </select>
                
                 </div> 
                 <div class="row2-enrol-col2">
                  <label for="fname">Father Name</label>
                  <select name="row[0][Father_name]" id="" class="form-control" required>
                @foreach ($students as $student)
                          <option value="{{$student->father_name}}">{{$student->father_name}}</option>
                          @endforeach
                        </select>
                  
                 </div> 
                 <div class="row2-enrol-col3">
                  <label for="Regno">Student Reg#</label>
                  <select name="row[0][Regno]" id="" class="form-control" required>
                @foreach ($students as $student)
                          <option value="{{$student->reg_no}}">{{$student->reg_no}}</option>
                          @endforeach
                        </select>
                 
                 </div>
                 <div class="row2-enrol-col3">
                  <label for="Section">Section</label>
                  <input type="text" name="row[0][Section]" class="form-control">
                  
                 </div>  
                 <div style="float:left; padding-left:20px;">
                 <label for="Ceased">Ceased</label>
                  <input type="checkbox" name="row[0][Ceased]" value="1" class="form-control">
                 </div>              
                 
              </div>

              <div class="row2">
              <div class="row2-enrol-col5">
                  <br><br><br>
                  <label for="approval">Sup. Committee Approved</label>
                  <select name="row[0][Approval]" id="" class="form-control" required>
                    <option value="">N/A</option>                  
                      <option value="No">No</option>
                      <option value="yes">yes</option>
                  </select>
                  <label for="course_work">Course Work Submitted</label>
                  <select name="row[0][Course_work]" id="" class="form-control" required>
                  <option value="">N/A</option>
                  <option value="No">No</option>
                      <option value="yes">yes</option>
                  </select>
                  <label for="synopsis">Synopsis Submitted</label>
                  <select name="row[0][Synopsis]" id="" class="form-control">
                  <option value="">N/A</option>                  
                  <option value="No">No</option>
                      <option value="yes">yes</option>
                  </select>
                  <label for="after_ceased">Enrolling After Ceased</label>
                  <select name="row[0][After_ceased]" id="" class="form-control">
                  <option value="">N/A</option>                  
                      <option value="No">No</option>
                      <option value="yes">yes</option>
                  </select>
                 </div>
                 <div class="row2-enrol-col5">
                 <br><br><br>
                   <label for="chalan">Chalan #</label>
                   <input type="text" name="row[0][Chalan_no]" class="form-control" required>
                   <label for="chalan">Chalan Amount</label>
                   <input type="text" name="row[0][Chalan_amount]" class="form-control" required>
                   <label for="Remarks">Remarks</label>
                   <textarea name="row[0][Remarks]" id="" class="form-control" rows="4"></textarea>
                 </div>
              
              </div>

              <!--------------Enrollment Status-------->

              <div class="row3">
                  <div class="row3-col1 col-md-8">
                  <label for="">Enrollment Status</label>
                  <select name="row[0][Enroll_status]" id="" class="form-control" required>
                    <option value="">N/A</option>
                    <option value="admitted">admitted</option>
                        <option value="cancel">cancel</option>
                        <option value="Discontinued">Discontinued</option>
                        <option value="enrolled">enrolled</option>
                  </select>
                  </div>
                
                  <div class="row3-col3 col-md-4">
                  <label for=""></label>
                  <button type="button" class="btn btn-primary">Select All Courses</button>
                       
                  </div>
                 
              </div>
              <div class="row4">
              <div class="row4-col1">
              <select name="row[0][course_code]" id="" class="form-control" required>
                       <option value="">N/A</option>
                       
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[1][course_code]" id="" class="form-control" required>
                          <option value="">N/A</option>
                                      
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[2][course_code]" id="" class="form-control" required>
                           <option value="">N/A</option>
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[3][course_code]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[4][course_code]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[5][course_code]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[6][course_code]" id="" class="form-control">
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[7][course_code]" id="" class="form-control">
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                       
                  </div>
                 
                  <div class="row4-col2">
                       <label for="">Course Name</label>
                       <select name="row[0][Course_name]" id="" class="form-control" required>
                       <option value="">N/A</option>
                       
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[1][Course_name]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[2][Course_name]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[3][Course_name]" id="" class="form-control" required>
                        <option value="">N/A</option>                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[4][Course_name]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[5][Course_name]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[6][Course_name]" id="" class="form-control">
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[7][Course_name]" id="" class="form-control">
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
         
                        
                 
                  </div>
                    <div class="row4-col3">
                       <label for="">Course Type</label>
                     <select name="row[0][Course_type]" id="" class="form-control" required>
                     <option value="">N/A</option>
                     <option value="Deficiency">Deficiency</option>
                     <option value="Minor">Minor</option>
                     <option value="Audit">Audit</option>
                     <option value="Specialization">Specialization</option>
                     <option value="Thesis">Thesis</option>
                     <option value="Internship">Internship</option>
                     <option value="Major/core">Major/core</option>
                   
                     </select>
                     <select name="row[1][Course_type]" id="" class="form-control" required>
                     <option value="">N/A</option>
                     <option value="Deficiency">Deficiency</option>
                     <option value="Minor">Minor</option>
                     <option value="Audit">Audit</option>
                     <option value="Specialization">Specialization</option>
                     <option value="Thesis">Thesis</option>
                     <option value="Internship">Internship</option>
                     <option value="Major/core">Major/core</option>
                   
                     </select>
                     <select name="row[2][Course_type]" id="" class="form-control" required>
                     <option value="">N/A</option>
                     <option value="Deficiency">Deficiency</option>
                     <option value="Minor">Minor</option>
                     <option value="Audit">Audit</option>
                     <option value="Specialization">Specialization</option>
                     <option value="Thesis">Thesis</option>
                     <option value="Internship">Internship</option>
                     <option value="Major/core">Major/core</option>
                   
                     </select>
                     <select name="row[3][Course_type]" id="" class="form-control" required>
                     <option value="">N/A</option>
                     <option value="Deficiency">Deficiency</option>
                     <option value="Minor">Minor</option>
                     <option value="Audit">Audit</option>
                     <option value="Specialization">Specialization</option>
                     <option value="Thesis">Thesis</option>
                     <option value="Internship">Internship</option>
                     <option value="Major/core">Major/core</option>
                   
                     </select>
                     <select name="row[4][Course_type]" id="" class="form-control" required>
                     <option value="">N/A</option>
                     <option value="Deficiency">Deficiency</option>
                     <option value="Minor">Minor</option>
                     <option value="Audit">Audit</option>
                     <option value="Specialization">Specialization</option>
                     <option value="Thesis">Thesis</option>
                     <option value="Internship">Internship</option>
                     <option value="Major/core">Major/core</option>
                   
                     </select>
                     <select name="row[5][Course_type]" id="" class="form-control" required>
                     <option value="">N/A</option>
                     <option value="Deficiency">Deficiency</option>
                     <option value="Minor">Minor</option>
                     <option value="Audit">Audit</option>
                     <option value="Specialization">Specialization</option>
                     <option value="Thesis">Thesis</option>
                     <option value="Internship">Internship</option>
                     <option value="Major/core">Major/core</option>
                   
                     </select>
                     <select name="row[6][Course_type]" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="Deficiency">Deficiency</option>
                     <option value="Minor">Minor</option>
                     <option value="Audit">Audit</option>
                     <option value="Specialization">Specialization</option>
                     <option value="Thesis">Thesis</option>
                     <option value="Internship">Internship</option>
                     <option value="Major/core">Major/core</option>
                   
                     </select>
                     <select name="row[7][Course_type]" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="Deficiency">Deficiency</option>
                     <option value="Minor">Minor</option>
                     <option value="Audit">Audit</option>
                     <option value="Specialization">Specialization</option>
                     <option value="Thesis">Thesis</option>
                     <option value="Internship">Internship</option>
                     <option value="Major/core">Major/core</option>
                   
                     </select>
                     
                       
                  </div>
                  <div class="row4-col3">
                      <label for="">Course Status</label>
                  <select name="row[0][Course_Status]" id="" class="form-control" required>
                     <option value="">N/A</option>
                     <option value="Regular">Regular</option>
                     <option value="Reappear">Reappear</option>
                     <option value="Exampted">Exampted</option>
                     <option value="Improvement">Improvement</option>
                     <option value="Inprocess">Inprocess</option>
                     <option value="Comprehansive">Comprehansive</option>
                     <option value="Attended">Attended</option>
                     </select>
                     <select name="row[1][Course_Status]" id="" class="form-control" required>
                     <option value="">N/A</option>
                     <option value="Regular">Regular</option>
                     <option value="Reappear">Reappear</option>
                     <option value="Exampted">Exampted</option>
                     <option value="Improvement">Improvement</option>
                     <option value="Inprocess">Inprocess</option>
                     <option value="Comprehansive">Comprehansive</option>
                     <option value="Attended">Attended</option>
                     </select>
                     <select name="row[2][Course_Status]" id="" class="form-control" required>
                     <option value="">N/A</option>
                     <option value="Regular">Regular</option>
                     <option value="Reappear">Reappear</option>
                     <option value="Exampted">Exampted</option>
                     <option value="Improvement">Improvement</option>
                     <option value="Inprocess">Inprocess</option>
                     <option value="Comprehansive">Comprehansive</option>
                     <option value="Attended">Attended</option>
                     </select>
                     <select name="row[3][Course_Status]" id="" class="form-control" required>
                     <option value="">N/A</option>
                     <option value="Regular">Regular</option>
                     <option value="Reappear">Reappear</option>
                     <option value="Exampted">Exampted</option>
                     <option value="Improvement">Improvement</option>
                     <option value="Inprocess">Inprocess</option>
                     <option value="Comprehansive">Comprehansive</option>
                     <option value="Attended">Attended</option>
                     </select>
                     <select name="row[4][Course_Status]" id="" class="form-control" required>
                     <option value="">N/A</option>
                     <option value="Regular">Regular</option>
                     <option value="Reappear">Reappear</option>
                     <option value="Exampted">Exampted</option>
                     <option value="Improvement">Improvement</option>
                     <option value="Inprocess">Inprocess</option>
                     <option value="Comprehansive">Comprehansive</option>
                     <option value="Attended">Attended</option>
                     </select>
                     <select name="row[5][Course_Status]" id="" class="form-control" required>
                     <option value="">N/A</option>
                     <option value="Regular">Regular</option>
                     <option value="Reappear">Reappear</option>
                     <option value="Exampted">Exampted</option>
                     <option value="Improvement">Improvement</option>
                     <option value="Inprocess">Inprocess</option>
                     <option value="Comprehansive">Comprehansive</option>
                     <option value="Attended">Attended</option>
                     </select>
                     <select name="row[6][Course_Status]" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="Regular">Regular</option>
                     <option value="Reappear">Reappear</option>
                     <option value="Exampted">Exampted</option>
                     <option value="Improvement">Improvement</option>
                     <option value="Inprocess">Inprocess</option>
                     <option value="Comprehansive">Comprehansive</option>
                     <option value="Attended">Attended</option>
                     </select>
                     <select name="row[7][Course_Status]" id="" class="form-control" >
                     <option value="">N/A</option>
                     <option value="Regular">Regular</option>
                     <option value="Reappear">Reappear</option>
                     <option value="Exampted">Exampted</option>
                     <option value="Improvement">Improvement</option>
                     <option value="Inprocess">Inprocess</option>
                     <option value="Comprehansive">Comprehansive</option>
                     <option value="Attended">Attended</option>
                     </select>
                     
                  </div>
                  <div class="row4-col3">
                       <label for="">Credit Hours</label>
                       <select name="row[0][Credit_hours]" id="" class="form-control" required>
                       <option value="">N/A</option>
                       
                @foreach ($courses as $course)
                          <option value="{{$course->credit_hours}}">{{$course->credit_hours}}</option>
                          @endforeach
                        </select>
                        <select name="row[1][Credit_hours]" id="" class="form-control" required>
                          <option value="">N/A</option>
                                      
                @foreach ($courses as $course)
                          <option value="{{$course->credit_hours}}">{{$course->credit_hours}}</option>
                          @endforeach
                        </select>
                        <select name="row[2][Credit_hours]" id="" class="form-control" required>
                           <option value="">N/A</option>
                @foreach ($courses as $course)
                          <option value="{{$course->credit_hours}}">{{$course->credit_hours}}</option>
                          @endforeach
                        </select>
                        <select name="row[3][Credit_hours]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->credit_hours}}">{{$course->credit_hours}}</option>
                          @endforeach
                        </select>
                        <select name="row[4][Credit_hours]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->credit_hours}}">{{$course->credit_hours}}</option>
                          @endforeach
                        </select>
                        <select name="row[5][Credit_hours]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->credit_hours}}">{{$course->credit_hours}}</option>
                          @endforeach
                        </select>
                        <select name="row[6][Credit_hours]" id="" class="form-control">
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->credit_hours}}">{{$course->credit_hours}}</option>
                          @endforeach
                        </select>
                        <select name="row[7][Credit_hours]" id="" class="form-control">
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->credit_hours}}">{{$course->credit_hours}}</option>
                          @endforeach
                        </select>
                        
                  </div>
                  <div class="row4-col4">
                       <label for="">Course Incharge</label>
                       <select name="row[0][Course_incharge]" id="" class="form-control" required>
                       <option value="">N/A</option>
                       
                       @foreach ($instructors as $instructor)
                          <option value="{{$instructor->id}}">{{$instructor->fname}} {{$instructor->lastname}}</option>
                          @endforeach
                        </select>
                        <select name="row[1][Course_incharge]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                       @foreach ($instructors as $instructor)
                          <option value="{{$instructor->id}}">{{$instructor->fname}} {{$instructor->lastname}}</option>
                          @endforeach
                        </select>
                        <select name="row[2][Course_incharge]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                       @foreach ($instructors as $instructor)
                          <option value="{{$instructor->id}}">{{$instructor->fname}} {{$instructor->lastname}}</option>
                          @endforeach
                        </select>
                        <select name="row[3][Course_incharge]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                       @foreach ($instructors as $instructor)
                          <option value="{{$instructor->id}}">{{$instructor->fname}} {{$instructor->lastname}}</option>
                          @endforeach
                        </select>
                        <select name="row[4][Course_incharge]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                       @foreach ($instructors as $instructor)
                          <option value="{{$instructor->id}}">{{$instructor->fname}} {{$instructor->lastname}}</option>
                          @endforeach
                        </select>
                        <select name="row[5][Course_incharge]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                       @foreach ($instructors as $instructor)
                          <option value="{{$instructor->id}}">{{$instructor->fname}} {{$instructor->lastname}}</option>
                          @endforeach
                        </select>
                        <select name="row[6][Course_incharge]" id="" class="form-control">
                        <option value="">N/A</option>
                        
                       @foreach ($instructors as $instructor)
                          <option value="{{$instructor->id}}">{{$instructor->fname}} {{$instructor->lastname}}</option>
                          @endforeach
                        </select>
                        <select name="row[7][Course_incharge]" id="" class="form-control">
                        <option value="">N/A</option>
                        
                       @foreach ($instructors as $instructor)
                          <option value="{{$instructor->id}}">{{$instructor->fname}} {{$instructor->lastname}}</option>
                          @endforeach
                        </select>
                        
                  </div>
                  <div class="row col-md-12">
                       <div style="padding:20px 0px 20px 40px; width:100%" class="btn ">
                        <input type="submit" value="Save" class="btn btn-primary btn-outline-primary " style="float:left; width:50%">
                        <input type="button" value="Cancel" class="btn btn-danger btn-outline-primary " style="float:left; padding-left:10px; width:50%">
                       </div>
                       
                   </div>
              </div>
              
           </form>
        </div>
    </div>
<!-- /#page-wrapper -->

</div>
    <!-- /#wrapper -->
    <script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
</script>
    <!-- jQuery -->
    <script src="../js/jquery/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/metisMenu.min.js"></script>
    <script src="../js/raphael.min.js"></script>
    <script src="../js/morris.min.js"></script>
    <script src="../js/sb-admin-2.js"></script>
    <main class="py-4">
            @yield('content')
        </main>
</body>

</html>
