<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../css/customstyle.css" rel="stylesheet">
    <link href="../css/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    <link href="../css/morrisjs/morris.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fonts/css/all.css">
        <title>CMS-BIKAT</title>
<style>

</style>
</head>

<body>

<div id="soft-all-wrapper">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    @include('admin.inc.header')
    @include('admin.inc.attsidebar')
    
    <!-- /.navbar-static-side -->
</nav>

<div id="page-wrapper">
    <div class="panel panel-default">
        <div class="panel-heading "><i class="fa fa-calendar-check fa-fw"></i>Attendence</div>
        <div class="panel-body">
                 <form class="form" action="">
                   <div class="att-row-1">
                      <h3>Select Criteria</h3>
                      <div class="att-col">
                      <label for="">Semester</label>
                      <input type="text" name="semester" class="form-control">
                      </div>
                      <div class="att-col">
                      <label for="">Department</label>
                      <select name="shift" id="shift" class="form-control">
                      <option value="">Computer Science</option>
                      <option value="">Bussiness Administration</option>
                      </select>                     
                       </div>
                      <div class="att-col">
                      <label for="">Session</label>
                      <input type="text" name="semester" class="form-control">
                      </div>
                      <div class="att-col">
                      <label for="">Shift</label>
                      <select name="shift" id="shift" class="form-control">
                      <option value="">Morning</option>
                      <option value="">Evening</option>
                      </select>
                      </div>
                      <div class="att-col">
                      <label for="">Attendence Date</label>
                      <input type="date" name="semester" class="form-control">
                      </div>
                   </div>
                 <div class="att-row-2">
                    <h3><i class="fa fa-group fa-fw"> </i>  Student List</h3>
                    <div class="table-responsive">
                      <table class="table table-bordered table-responsive-md table-striped  text-center" id="example" width="100%">
                          <thead>
                              <tr>
                                  <th class="att-md-1">#</th>
                                  <th class="att-md-2">Reg.No</th>
                                  <th class="att-md-4">Name</th>
                                  <th class="att-md-4">Attendence</th>
                                  
                              </tr>
                          </thead>
                          <tbody>
                               <tr>
                                 <td class="att-md-1">1</td>
                                 <td class="att-md-2">15-arid-1234434325</td>
                                 <td class="att-md-4">Naseeb ul Hassan </td>
                                 <td class="att-md-4"> 
                               
                                        Present &nbsp;&nbsp;<input type="radio">&nbsp;&nbsp;
                                        Absent &nbsp;&nbsp;<input type="radio">
                                    
                                 </td>
                               </tr>
                               <tr>
                                 <td class="att-md-1">1</td>
                                 <td class="att-md-2">15-arid-1234434325</td>
                                 <td class="att-md-4">Naseeb ul Hassan </td>
                                 <td class="att-md-4"> 
                                        Present &nbsp;&nbsp;<input type="radio">&nbsp;&nbsp;
                                        Absent &nbsp;&nbsp;<input type="radio">
                                 </td>
                               </tr>
                               <tr>
                                 <td class="att-md-1">1</td>
                                 <td class="att-md-2">15-arid-1234434325</td>
                                 <td class="att-md-4">Naseeb ul Hassan </td>
                                 <td class="att-md-4"> 
                                        Present &nbsp;&nbsp;<input type="radio">&nbsp;&nbsp;
                                        Absent &nbsp;&nbsp;<input type="radio">
                                 </td>
                               </tr>
                               <tr>
                                 <td class="att-md-1">1</td>
                                 <td class="att-md-2">15-arid-1234434325</td>
                                 <td class="att-md-4">Naseeb ul Hassan </td>
                                 <td class="att-md-4"> 
                                        Present &nbsp;&nbsp;<input type="radio">&nbsp;&nbsp;
                                        Absent &nbsp;&nbsp;<input type="radio">
                                 </td>
                               </tr>
                               <tr>
                                 <td class="att-md-1">1</td>
                                 <td class="att-md-2">15-arid-1234434325</td>
                                 <td class="att-md-4">Naseeb ul Hassan </td>
                                 <td class="att-md-4"> 
                                        Present &nbsp;&nbsp;<input type="radio">&nbsp;&nbsp;
                                        Absent &nbsp;&nbsp;<input type="radio">
                                 </td>
                               </tr>
                               <tr>
                                 <td class="att-md-1">1</td>
                                 <td class="att-md-2">15-arid-1234434325</td>
                                 <td class="att-md-4">Naseeb ul Hassan </td>
                                 <td class="att-md-4"> 
                                        Present &nbsp;&nbsp;<input type="radio">&nbsp;&nbsp;
                                        Absent &nbsp;&nbsp;<input type="radio">
                                 </td>
                               </tr>
                               <tr>
                                 <td class="att-md-1">1</td>
                                 <td class="att-md-2">15-arid-1234434325</td>
                                 <td class="att-md-4">Naseeb ul Hassan </td>
                                 <td class="att-md-4"> 
                                        Present &nbsp;&nbsp;<input type="radio">&nbsp;&nbsp;
                                        Absent &nbsp;&nbsp;<input type="radio">
                                 </td>
                               </tr>
                               <tr>
                                 <td class="att-md-1">1</td>
                                 <td class="att-md-2">15-arid-1234434325</td>
                                 <td class="att-md-4">Naseeb ul Hassan </td>
                                 <td class="att-md-4"> 
                                        Present &nbsp;&nbsp;<input type="radio">&nbsp;&nbsp;
                                        Absent &nbsp;&nbsp;<input type="radio">
                                 </td>
                               </tr>
                               <tr>
                                 <td class="att-md-1">1</td>
                                 <td class="att-md-2">15-arid-1234434325</td>
                                 <td class="att-md-4">Naseeb ul Hassan </td>
                                 <td class="att-md-4"> 
                                        Present &nbsp;&nbsp;<input type="radio">&nbsp;&nbsp;
                                        Absent &nbsp;&nbsp;<input type="radio">
                                 </td>
                               </tr>
                               <tr>
                                 <td class="att-md-1">1</td>
                                 <td class="att-md-2">15-arid-1234434325</td>
                                 <td class="att-md-4">Naseeb ul Hassan </td>
                                 <td class="att-md-4"> 
                                        Present &nbsp;&nbsp;<input type="radio">&nbsp;&nbsp;
                                        Absent &nbsp;&nbsp;<input type="radio">
                                 </td>
                               </tr>
                               <tr>
                                 <td class="att-md-1">1</td>
                                 <td class="att-md-2">15-arid-1234434325</td>
                                 <td class="att-md-4">Naseeb ul Hassan </td>
                                 <td class="att-md-4"> 
                                        Present &nbsp;&nbsp;<input type="radio">&nbsp;&nbsp;
                                        Absent &nbsp;&nbsp;<input type="radio">
                                 </td>
                               </tr>
                               <tr>
                                 <td class="att-md-1">1</td>
                                 <td class="att-md-2">15-arid-1234434325</td>
                                 <td class="att-md-4">Naseeb ul Hassan </td>
                                 <td class="att-md-4"> 
                                        Present &nbsp;&nbsp;<input type="radio">&nbsp;&nbsp;
                                        Absent &nbsp;&nbsp;<input type="radio">
                                 </td>
                               </tr>
                               <tr>
                                 <td class="att-md-1">1</td>
                                 <td class="att-md-2">15-arid-1234434325</td>
                                 <td class="att-md-4">Naseeb ul Hassan </td>
                                 <td class="att-md-4"> 
                                        Present &nbsp;&nbsp;<input type="radio">&nbsp;&nbsp;
                                        Absent &nbsp;&nbsp;<input type="radio">
                                 </td>
                               </tr>
                          </tbody>
                      </table>
                      </div>
                 </div>

                 </form>                
        </div>
    </div>
    
<!-- /#page-wrapper -->

</div>
    <!-- /#wrapper -->

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
