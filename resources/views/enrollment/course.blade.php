

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../css/bootstrap/css/bootstrap.css" rel="stylesheet">
    
<!-- MetisMenu CSS -->
<link href="../css/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../css/sb-admin-2.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="../css/morrisjs/morris.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="fonts/css/all.css">
    <title>CMS-BIKAT</title>
<style>
 .modal{
        background-color:#005A57;
        color:white;        
    }
    .modal-header{
        color:#005A57; 
    }
    label{
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
    
         
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="text-center">Add Courses <span ></span></h4>
                    </div>
                    <div class="panel-body">
                        
                <form method="POST" action="{{url('course')}}">
                {{csrf_field()}}
                        <table class="table table-bordered table-responsive-md text-center" id="dtBasicExample" width="100%">
                            <thead >
                            <tr>
                            <th class="col-md-1">Course Code</th>
                            <th class="col-md-4">Course Name</th>
                            <th class="col-md-1">Credit Hours</th>
                            <th class="col-md-1">Action</th>
                            </tr>
                            </thead>
                                <tbody>
                                    <tr>
                                  
                                        <td><input type="text" name="rows[0][Course_code]" id="coursecode" class="form-control col-md-1" required></td>
                                        <td><input type="text" name="rows[0][Course_name]" id="coursename" class="form-control col-md-4" required></td>
                                        <td><input type="text" name="rows[0][Credit_hours]" id="credithours" class="form-control col-md-1" required></td>
                                        <td></td>
                                    </tr>
                                    <tr> 
                                  
                                    <td><input type="text" name="rows[1][Course_code]" id="coursecode" class="form-control col-md-1" required></td>
                                    <td><input type="text" name="rows[1][Course_name]" id="coursename" class="form-control col-md-4" required></td>
                                    <td><input type="text" name="rows[1][Credit_hours]" id="credithours" class="form-control col-md-1" required></td>
                                    <td> <button type="submit" class="btn btn-primary btn-outline-primary"> Add</button></td>

                              </tr>
                              <tr>
                              
                              </tr>
                                    @foreach($course as $row)
                                    <tr>
                                        <td>{{$row['course_code']}}</td>
                                        <td>{{$row['course_name']}}</td>
                                        <td>{{$row['credit_hours']}}</td>
                                        <td> 
                                     
                                         <a href="{{action('CourseController@edit',$row['id'])}}" class="btn btn-warning " type="submit" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></a>
                                         <a href="{{url('enrollment/'.$row['id'].'/course')}}" class="btn btn-danger btn-outline-primary" type="submit"><i class="fa fa-trash"></i></a>
                                        
                                       </td>
                                    </tr>
                                    @endforeach
                                    
  
                                </tbody>                    
                            </table>
                           
                    </form>
                    <div class="align-right">{{$course->links()}}</div>
<form method="POST" action="{{action('/course/update',$id)}}" >
{{csrf_field()}}
 <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        
        <label for="">Course Code</label>
        <input type="text" value="{{$row['course_code']}}" class="form-control">
        <label for="">Course Name</label>
        <input type="text" value="{{$row['course_name']}}" class="form-control">
        <label for="">Credit Hours</label>
        <input type="text" value="{{$row['credit_hours']}}" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

  </div>
</div>        
</form>

               
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