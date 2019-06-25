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
        <div class="panel-heading ">Personal Info</div>
        <div class="panel-body">
        <form action="" method="post">
            <div class="row-3">
            <label for="">Student ID</label>
                <input type="text" name="st_id" value="" class="form-control col-md-3" required>
            <div class="step3-column">
                <label for="blood">Blood Group</label>
                <select class="form-control">
                    <option value="">N/A</option>
                    <option value="">O -ve</option>
                    <option value="">O +ve</option>
                    <option value="">B -ve</option>
                    <option value="">B +ve</option>
                    <option value="">A -ve</option>
                    <option value="">A +ve</option>
                    <option value="">AB +ve</option>
                    <option value="">AB -ve</option>
                   
                </select>
                <label for="blood">Martial Status</label>
                <select class="form-control">
                    <option value="">N/A</option>
                    <option value="">Single</option>
                    <option value="">Married</option>
                    <option value="">Widow</option>
                </select>
                <label for="blood">Family Doctor</label>
                <input type="text" name="doctor" class="form-control">
              
           </div>
           <div class="step3-column">
           <label for="Hostel">Hostel Required?</label>
                <select class="form-control">
                    <option value="">No</option>
                    <option value="">yes</option>
               
                </select>
                <label for="transport">Transport Required?</label>
                <select class="form-control">
                    <option value="">No</option>
                    <option value="">yes</option>
               
                </select>
           </div>
           <div class="step3-column">
           <label for="Hostelgranted">Hostel Granted</label>
                <select class="form-control">
                    <option value="">No</option>
                    <option value="">yes</option>
               
                </select>
                <label for="transportgranted">Transport Granted</label>
                <select class="form-control">
                    <option value="">No</option>
                    <option value="">yes</option>
               
                </select>
                <label for="admission">Admission Granted</label>
                <select class="form-control">
                    <option value="">No</option>
                    <option value="">yes</option>
               
                </select>
           </div>
            </div>
      <div class="row-4">
      <div class="step3-column2">
           <br><br><br>
                 <label for="hobbies">Hobbies</label>
                 <input type="text" name="hobbies" class="form-control">
                 <label for="ailment">Suffer from any Ailment</label>
                 <input type="text" name="ailment" class="form-control">
                 <label for="remarks">Remarks About most Influenced Person</label>
                 <input type="text" name="remarks" class="form-control">
           </div>
           <div class="step3-column2">
           <br><br><br>
                 <label for="faculity">Why you have selected particular faculity for higher education? </label>
                 <input type="text" name="faculity" class="form-control">
                 <label for="Points">Personality Points</label>
                 <input type="text" name="Points" class="form-control">
                 <label for="Foriegn">Foriegn Country visted</label>
                 <input type="text" name="Foriegn" class="form-control">
           </div>
           <div class="row col-md-12">
                       <div style="padding:50px 0px 20px 40px; width:100%" class="btn ">
                        <input type="button" value="Submit" class="btn btn-primary btn-outline-primary " style="float:left; width:50%">
                        <input type="button" value="Cancel" class="btn btn-danger btn-outline-primary " style="float:left; padding-left:10px; width:50%">
                       </div>
                       
                   </div>
    
      </div>
           <br><br><br>
           
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
