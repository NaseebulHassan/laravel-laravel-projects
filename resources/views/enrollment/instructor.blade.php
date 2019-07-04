<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fonts/css/all.css">
    <title>CMS-BIKAT</title>

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
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Teacher</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Teacher</h4>
      </div>
      <div class="modal-body">
        

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
                                    <input type="integer" class="form-control" name="cellno" id="cellno" maxlength="12" placeholder="Enter Cell No" required>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<br><br>
       <div>
       <table class="table table-bordered table-responsive-md " id="dtBasicExample" width="100%">
                <thead>
                    <tr>
                        <th>Teacher Name</th>
                        <th>Email Address</th>
                        <th>Cell No</th>
                        <th>Type </th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($instructors as $row)
                    <tr>
                        <td>{{$row['fname']}} {{$row['lastname']}}</td>
                        <td>{{$row['email']}}</td>
                        <td>{{$row['cellno']}}</td>
                        <td>{{$row['type']}}</td>
                        <td>{{$row['department']}}</td>
                        <td><a href="{{url('enrollment/'.$row['id'].'/edit_teacher')}}" class="btn btn-danger" ><i  class="fa fa-edit"></i></a>
                        <a href="{{url('enrollment/'.$row['id'].'/instructor')}}" class="btn btn-danger"><i  class="fa fa-trash"></i></a></td>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
            

       </div>
                 
        <div>
    </div>

  </div>
</div>
        </div>
           
   
    </div>
    
<!-- /#page-wrapper -->

</div>
    <!-- /#wrapper -->
    <script src="../js/jquery/jquery.min.js"></script>
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
