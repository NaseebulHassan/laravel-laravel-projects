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
        <div class="panel-heading ">Sibling Detail</div>
        <div class="panel-body">
           <form action="" method="post">
               <div class="row-4">
               <label for="">Student ID</label>
                <input type="text" name="st_id" value="" class="form-control col-md-3" required>
               <div class="step4-column">
                    <label for="siblings">Sibling Name</label>
                    <input type="text" name="sibling" class="form-control"><br>
                    <input type="text" name="sibling" class="form-control"><br>
                    <input type="text" name="sibling" class="form-control"><br>
                    <input type="text" name="sibling" class="form-control"><br>
                    <input type="text" name="sibling" class="form-control"><br>
               </div>
               <div class="step4-column">
                     <label for="">Relation</label>
                                <select name="degree-level" id="" class="form-control">
                                        <option value="">N/A</option>
                                        <option value="">Self</option>
                                        <option value="">Brother</option>
                                        <option value="">Uncle</option>
                                        <option value="">Son</option>
                                        <option value="">Dughter</option>
                                        <option value="">Mother</option>
                                        <option value="">Wife</option>
                                        <option value="">Aunt</option>
                                        <option value="">Sister</option>
                                </select><br>
                                <select name="degree-level" id="" class="form-control">
                                        <option value="">N/A</option>
                                        <option value="">Self</option>
                                        <option value="">Brother</option>
                                        <option value="">Uncle</option>
                                        <option value="">Son</option>
                                        <option value="">Dughter</option>
                                        <option value="">Mother</option>
                                        <option value="">Wife</option>
                                        <option value="">Aunt</option>
                                        <option value="">Sister</option>
                                </select><br>
                                <select name="degree-level" id="" class="form-control">
                                        <option value="">N/A</option>
                                        <option value="">Self</option>
                                        <option value="">Brother</option>
                                        <option value="">Uncle</option>
                                        <option value="">Son</option>
                                        <option value="">Dughter</option>
                                        <option value="">Mother</option>
                                        <option value="">Wife</option>
                                        <option value="">Aunt</option>
                                        <option value="">Sister</option>
                                </select><br>
                                <select name="degree-level" id="" class="form-control">
                                        <option value="">N/A</option>
                                        <option value="">Self</option>
                                        <option value="">Brother</option>
                                        <option value="">Uncle</option>
                                        <option value="">Son</option>
                                        <option value="">Dughter</option>
                                        <option value="">Mother</option>
                                        <option value="">Wife</option>
                                        <option value="">Aunt</option>
                                        <option value="">Sister</option>
                                </select><br>
                                <select name="degree-level" id="" class="form-control">
                                        <option value="">N/A</option>
                                        <option value="">Self</option>
                                        <option value="">Brother</option>
                                        <option value="">Uncle</option>
                                        <option value="">Son</option>
                                        <option value="">Dughter</option>
                                        <option value="">Mother</option>
                                        <option value="">Wife</option>
                                        <option value="">Aunt</option>
                                        <option value="">Sister</option>
                                </select> 
               </div>
               <div class="step4-column2">
                    <label for="Age">Age</label>
                    <input type="text" name="Age" class="form-control"><br>
                    <input type="text" name="Age" class="form-control"><br>
                    <input type="text" name="Age" class="form-control"><br>
                    <input type="text" name="Age" class="form-control"><br>
                    <input type="text" name="Age" class="form-control"><br>
                  
               </div>
               <div class="step4-column3 ">
                    <label for="Institute">Education Department</label>
                    <input type="text" name="Institute" class="form-control"><br>
                    <input type="text" name="Institute" class="form-control"><br>
                    <input type="text" name="Institute" class="form-control"><br>
                    <input type="text" name="Institute" class="form-control"><br>
                    <input type="text" name="Institute" class="form-control"><br>
                  
               </div>
               <div class="step4-column3 ">
                    <label for="Institute">Examination Department</label>
                    <input type="text" name="Institute" class="form-control"><br>
                    <input type="text" name="Institute" class="form-control"><br>
                    <input type="text" name="Institute" class="form-control"><br>
                    <input type="text" name="Institute" class="form-control"><br>
                    <input type="text" name="Institute" class="form-control"><br>
                  
               </div>
               <div class="step4-column ">
               <label for="step2">Degree</label>
                        <select name="degree" id="" class="form-control">
                            <option value="">N/A</option>
                            <option value="">Ph.D</option>
                            <option value="">Masters</option>
                            <option value="">Bachelor's</option>
                            <option value="">O'Levels</option>
                            <option value="">Diploma</option>
                            <option value="">Intermediate</option>
                            <option value="">Matric</option>
                        </select><br>
                        <select name="degree" id="" class="form-control">
                            <option value="">N/A</option>
                            <option value="">Ph.D</option>
                            <option value="">Masters</option>
                            <option value="">Bachelor's</option>
                            <option value="">O'Levels</option>
                            <option value="">Diploma</option>
                            <option value="">Intermediate</option>
                            <option value="">Matric</option>
                        </select><br>
                        <select name="degree" id="" class="form-control">
                            <option value="">N/A</option>
                            <option value="">Ph.D</option>
                            <option value="">Masters</option>
                            <option value="">Bachelor's</option>
                            <option value="">O'Levels</option>
                            <option value="">Diploma</option>
                            <option value="">Intermediate</option>
                            <option value="">Matric</option>
                        </select><br>
                        <select name="degree" id="" class="form-control">
                            <option value="">N/A</option>
                            <option value="">Ph.D</option>
                            <option value="">Masters</option>
                            <option value="">Bachelor's</option>
                            <option value="">O'Levels</option>
                            <option value="">Diploma</option>
                            <option value="">Intermediate</option>
                            <option value="">Matric</option>
                        </select><br>
                        <select name="degree" id="" class="form-control">
                            <option value="">N/A</option>
                            <option value="">Ph.D</option>
                            <option value="">Masters</option>
                            <option value="">Bachelor's</option>
                            <option value="">O'Levels</option>
                            <option value="">Diploma</option>
                            <option value="">Intermediate</option>
                            <option value="">Matric</option>
                        </select><br>
               </div>
               <div class="step4-column">
                    <label for="Remarks">Remarks</label>
                    <input type="text" name="Remarks" class="form-control"><br>
                    <input type="text" name="Remarks" class="form-control"><br>
                    <input type="text" name="Remarks" class="form-control"><br>
                    <input type="text" name="Remarks" class="form-control"><br>
                    <input type="text" name="Remarks" class="form-control"><br>
                 
               </div>
               <div class="row col-md-12">
                       <div style="padding:50px 0px 0px 40px; width:100%" class="btn ">
                        <input type="button" value="Submit" class="btn btn-primary btn-outline-primary " style="float:left; width:50%">
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
