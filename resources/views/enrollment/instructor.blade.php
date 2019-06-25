<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
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
    .panel-heading{
        font-size:20pt;
        background-color:#005A57;
        color:white;
       text-align:center;
    }
    .panel-body{
       
        background-color:#005A57;
        color:#005A57;
       
    }
    .modal{
        background-color:#005A57;
        color:white;        
    }
    .modal-header{
        color:#005A57; 
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
    <div class="panel panel-default  offset-4 ">
        <div class="panel-heading ">Add Teacher</div>
        <div class="panel-body" >

        <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" >Add Teacher</button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Add Teacher</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form col-md-12" method="post" action="{{url('enrollment/instructor')}}">
                {{csrf_field()}}
        <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">First Name</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter first Name" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Last Name</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="lastname" id="name" placeholder="Enter Last Name" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="cols-sm-2 control-label"> Email</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter  Email" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="cols-sm-2 control-label">Cell No</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="cellno" id="cellno" placeholder="Enter Cell No" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="username" class="cols-sm-2 control-label">Teacher Type</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-marker fa" aria-hidden="true"></i></span>
                    <select class="form-control" name="type" required>
                        <option value="N/A">N/A</option>
                        <option value="Permanent">Permanent</option>
                        <option value="Visiting">Visiting</option>
                    
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="username" class="cols-sm-2 control-label">Department</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-building fa" aria-hidden="true"></i></span>
                    <select class="form-control" name="department" placeholder="Enter Department" required>
                        <option value="N/A">N/A</option>
                        <option value="Computer Sciences">Computer Sciences</option>
                        <option value="Management Sciences">Management Sciences</option>
                    
                    </select>
                </div>
            </div>
        </div>

        <div class="row col-md-8 ">
                           
          <input type="submit" value="Submit" class="btn btn-primary " style="float:left;margin-left:100px; width:100%">
                            
                            
        </div>

        </form>
            
   
  </div>
</div>


        
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
