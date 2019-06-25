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
        <div class="panel-heading ">Studetn Enrollment</div>
        <div class="panel-body">
           <form action="" method="post" class="form">
               <div class="row1">
               <div class="enrol-col1">
                    <label for="">Enrolling Date</label>
                    <input type="date" name="enrolldate" class="form-control">
                 </div>
                 <div class="enrol-col1">
                     <label for="">Semester (Enrolling in)</label>
                     <select name="enrolling-semester" id="" class="form-control">
                         <option value="">1</option>
                         <option value="">2</option>
                         <option value="">3</option>
                         <option value="">4</option>
                         <option value="">5</option>
                         <option value="">6</option>
                         <option value="">7</option>
                         <option value="">8</option>
                     </select>
                 </div>
              
                 <div class="enrol-col1">
                     <label for="">Semester#</label>
                     <select name="Semester" id="" class="form-control">
                     <option value="">Fall</option>
                     <option value="">Spring</option>
                     <option value="">Summer</option>

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
                  <select name="enrolling-semester" id="" class="form-control">
                         <option value="">2019</option>
                         <option value="">2020</option>
                         <option value="">2021</option>
                         <option value="">2022</option>
                         <option value="">2023</option>
                         <option value="">2024</option>
                         <option value="">2025</option>
                         <option value=""></option>
                     </select>
                 </div>        
                 <div class="row2-enrol-col1">
                  <label for="session">Degree</label>
                  <select name="enrolling-semester" id="" class="form-control">
                         <option value="">2019</option>
                         <option value="">2020</option>
                         <option value="">2021</option>
                         <option value="">2022</option>
                         <option value="">2023</option>
                         <option value="">2024</option>
                         <option value="">2025</option>
                         <option value=""></option>
                     </select>
                 </div>
                 <div class="row2-enrol-col2">
                  <label for="session">Student Name</label>
                  <input type="text" name="stname" class="form-control">
                 </div> 
                 <div class="row2-enrol-col2">
                  <label for="session">Father Name</label>
                  <input type="text" name="stname" class="form-control">
                 </div> 
                 <div class="row2-enrol-col3">
                  <label for="streg">Student Reg#</label>
                  <input type="text" name="streg" class="form-control">
                 </div>
                 <div class="row2-enrol-col3">
                  <label for="streg">Section</label>
                  <input type="text" name="streg" class="form-control">
                 </div>                
                 <div class="row2-enrol-col4">
                  <label for="streg">Ceased</label>
                  <input type="checkbox" name="streg" class="form-control">
                 </div>
              </div>

              <div class="row2">
              <div class="row2-enrol-col5">
                  <br><br><br>
                  <label for="streg">Sup. Committee Approved</label>
                  <select name="" id="" class="form-control">
                      <option value="">No</option>
                      <option value="">yes</option>
                  </select>
                  <label for="streg">Course Work Submitted</label>
                  <select name="" id="" class="form-control">
                      <option value="">No</option>
                      <option value="">yes</option>
                  </select>
                  <label for="streg">Synopsis Submitted</label>
                  <select name="" id="" class="form-control">
                      <option value="">No</option>
                      <option value="">yes</option>
                  </select>
                  <label for="streg">Enrolling After Ceased</label>
                  <select name="" id="" class="form-control">
                      <option value="">No</option>
                      <option value="">yes</option>
                  </select>
                 </div>
                 <div class="row2-enrol-col5">
                 <br><br><br>
                   <label for="chalan">Chalan #</label>
                   <input type="text" name="chalan" class="form-control">
                   <label for="chalan">Chalan Amount</label>
                   <input type="text" name="chalanamount" class="form-control">
                   <label for="Remarks">Remarks</label>
                   <textarea name="Remarks" id="" class="form-control" rows="4"></textarea>
                 </div>
              
              </div>

              <!--------------Enrollment Status-------->

              <div class="row3">
                  <div class="row3-col1">
                  <label for="">Enrollment Status</label>
                  </div>
                  <div class="row3-col2">
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">List
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">HTML</a></li>
                         <li><a href="#">CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                     </ul>
                   </div>
                  </div>
                  <div class="row3-col3">
                        <input type="text" name="status" class="form-control">
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
                 
                  <div class="row4-col1">
                       <label for="">Course Code</label>
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
                       <input type="text" name="Coursename" class="form-control">
                       <input type="text" name="Coursename" class="form-control">
                       <input type="text" name="Coursename" class="form-control">
                       <input type="text" name="Coursename" class="form-control">
                       <input type="text" name="Coursename" class="form-control">
                       <input type="text" name="Coursename" class="form-control">
                       <input type="text" name="Coursename" class="form-control">
                       <input type="text" name="Coursename" class="form-control">
      
                  </div>
                  <div class="row4-col3">
                       <label for="">Course Type</label>
                     <select name="coursetype" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Deficiency</option>
                     <option value="">Minor</option>
                     <option value="">Audit</option>
                     <option value="">Specialization</option>
                     <option value="">Thesis</option>
                     <option value="">Internship</option>
                     <option value="">Major/core</option>
                   
                     </select>
                     <select name="coursetype" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Deficiency</option>
                     <option value="">Minor</option>
                     <option value="">Audit</option>
                     <option value="">Specialization</option>
                     <option value="">Thesis</option>
                     <option value="">Internship</option>
                     <option value="">Major/core</option>
                   
                     </select>
                     <select name="coursetype" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Deficiency</option>
                     <option value="">Minor</option>
                     <option value="">Audit</option>
                     <option value="">Specialization</option>
                     <option value="">Thesis</option>
                     <option value="">Internship</option>
                     <option value="">Major/core</option>
                   
                     </select>
                     <select name="coursetype" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Deficiency</option>
                     <option value="">Minor</option>
                     <option value="">Audit</option>
                     <option value="">Specialization</option>
                     <option value="">Thesis</option>
                     <option value="">Internship</option>
                     <option value="">Major/core</option>
                   
                     </select>
                     <select name="coursetype" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Deficiency</option>
                     <option value="">Minor</option>
                     <option value="">Audit</option>
                     <option value="">Specialization</option>
                     <option value="">Thesis</option>
                     <option value="">Internship</option>
                     <option value="">Major/core</option>
                   
                     </select>
                     <select name="coursetype" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Deficiency</option>
                     <option value="">Minor</option>
                     <option value="">Audit</option>
                     <option value="">Specialization</option>
                     <option value="">Thesis</option>
                     <option value="">Internship</option>
                     <option value="">Major/core</option>
                   
                     </select>
                     <select name="coursetype" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Deficiency</option>
                     <option value="">Minor</option>
                     <option value="">Audit</option>
                     <option value="">Specialization</option>
                     <option value="">Thesis</option>
                     <option value="">Internship</option>
                     <option value="">Major/core</option>
                   
                     </select>
                     <select name="coursetype" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Deficiency</option>
                     <option value="">Minor</option>
                     <option value="">Audit</option>
                     <option value="">Specialization</option>
                     <option value="">Thesis</option>
                     <option value="">Internship</option>
                     <option value="">Major/core</option>
                   
                     </select>
                     
                     
                       
                  </div>
                  <div class="row4-col3">
                      <label for="">Course Status</label>
                  <select name="coursetype" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Regular</option>
                     <option value="">Reappear</option>
                     <option value="">Exampted</option>
                     <option value="">Improvement</option>
                     <option value="">Inprocess</option>
                     <option value="">Comprehansive</option>
                     <option value="">Attended</option>
                     </select>
                     <select name="coursetype" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Regular</option>
                     <option value="">Reappear</option>
                     <option value="">Exampted</option>
                     <option value="">Improvement</option>
                     <option value="">Inprocess</option>
                     <option value="">Comprehansive</option>
                     <option value="">Attended</option>
                     </select>
                     <select name="coursetype" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Regular</option>
                     <option value="">Reappear</option>
                     <option value="">Exampted</option>
                     <option value="">Improvement</option>
                     <option value="">Inprocess</option>
                     <option value="">Comprehansive</option>
                     <option value="">Attended</option>
                     </select>
                     <select name="coursetype" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Regular</option>
                     <option value="">Reappear</option>
                     <option value="">Exampted</option>
                     <option value="">Improvement</option>
                     <option value="">Inprocess</option>
                     <option value="">Comprehansive</option>
                     <option value="">Attended</option>
                     </select>
                     <select name="coursetype" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Regular</option>
                     <option value="">Reappear</option>
                     <option value="">Exampted</option>
                     <option value="">Improvement</option>
                     <option value="">Inprocess</option>
                     <option value="">Comprehansive</option>
                     <option value="">Attended</option>
                     </select>
                      <select name="coursetype" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Regular</option>
                     <option value="">Reappear</option>
                     <option value="">Exampted</option>
                     <option value="">Improvement</option>
                     <option value="">Inprocess</option>
                     <option value="">Comprehansive</option>
                     <option value="">Attended</option>
                     </select>
                     <select name="coursetype" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Regular</option>
                     <option value="">Reappear</option>
                     <option value="">Exampted</option>
                     <option value="">Improvement</option>
                     <option value="">Inprocess</option>
                     <option value="">Comprehansive</option>
                     <option value="">Attended</option>
                     </select>
                     <select name="coursetype" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Regular</option>
                     <option value="">Reappear</option>
                     <option value="">Exampted</option>
                     <option value="">Improvement</option>
                     <option value="">Inprocess</option>
                     <option value="">Comprehansive</option>
                     <option value="">Attended</option>
                     </select>
            
                  </div>
                  <div class="row4-col1">
                       <label for="">Section</label>
                       <input type="text" name="Section" class="form-control">
                       <input type="text" name="Section" class="form-control">
                       <input type="text" name="Section" class="form-control">
                       <input type="text" name="Section" class="form-control">
                       <input type="text" name="Section" class="form-control">
                       <input type="text" name="Section" class="form-control">
                       <input type="text" name="Section" class="form-control">
                       <input type="text" name="Section" class="form-control">
                     
                       
                  </div>
                  <div class="row4-col3">
                       <label for="">Credit Hours</label>
                       <input type="text" name="CreditHours" class="form-control">
                       <input type="text" name="CreditHours" class="form-control">
                       <input type="text" name="CreditHours" class="form-control">
                       <input type="text" name="CreditHours" class="form-control">
                       <input type="text" name="CreditHours" class="form-control">
                       <input type="text" name="CreditHours" class="form-control">
                       <input type="text" name="CreditHours" class="form-control">
                       <input type="text" name="CreditHours" class="form-control">
                      
                  </div>
                  <div class="row4-col4">
                       <label for="">Course Incharge</label>
                       <input type="text" name="CourseIncharge" class="form-control">
                       <input type="text" name="CourseIncharge" class="form-control">
                       <input type="text" name="CourseIncharge" class="form-control">
                       <input type="text" name="CourseIncharge" class="form-control">
                       <input type="text" name="CourseIncharge" class="form-control">
                       <input type="text" name="CourseIncharge" class="form-control">
                       <input type="text" name="CourseIncharge" class="form-control">
                       <input type="text" name="CourseIncharge" class="form-control">
                     
                       
                  </div>
                  <div class="row col-md-12">
                       <div style="padding:20px 0px 20px 40px; width:100%" class="btn ">
                        <input type="button" value="Save" class="btn btn-primary btn-outline-primary " style="float:left; width:50%">
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
