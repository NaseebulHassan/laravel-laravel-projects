<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../css/customstyle.css" rel="stylesheet">

    <link href="../css/bootstrap/css/bootstrap.css" rel="stylesheet">
    
<!-- MetisMenu CSS -->
<link href="../css/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../css/sb-admin-2.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="../css/morrisjs/morris.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
                    <input type="date" name="row[0][Enrolldate]" class="form-control" required>
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
                            <option value="BSCS">BSCS</option>
                            <option value="BSIT">BSIT</option>                            
                            <option value="BBA">BBA</option>
                            <option value="MBA">MBA</option>
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
                  <div class="row3-col1">
                  <label for="">Enrollment Status</label>
                  </div>
                
                  <div class="row3-col3">
                  <select name="row[0][Enroll_status]" id="" class="form-control" required>
                    <option value="">N/A</option>
                    <option value="Enrolled">Enrolled</option>
                    <option value="Pending">Pending</option>
                  </select>
                       
                  </div>
                 
              </div>
              <div class="row4">
              <div class="row4-col1">
                       <label for="">Total Enrolled</label>
                       <input type="text" name="CourseCode" class="form-control">
                       <input type="text" name="CourseCode" class="form-control">
                       <input type="text" name="CourseCode" class="form-control">
                       <input type="text" name="CourseCode" class="form-control">
                       <input type="text" name="CourseCode" class="form-control">
                       <input type="text" name="CourseCode" class="form-control">
                       <input type="text" name="CourseCode" class="form-control">
                       <input type="text" name="CourseCode" class="form-control">
                     
                       
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
                        <select name="row[0\6][Course_name]" id="" class="form-control">
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

    <!-- jQuery -->
    <script src="../css/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../css/raphael/raphael.min.js"></script>
    <script src="../css/morrisjs/morris.min.js"></script>
    <script src="../css/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../css/sb-admin-2.js"></script>
    <main class="py-4">
            @yield('content')
        </main>
</body>

</html>
