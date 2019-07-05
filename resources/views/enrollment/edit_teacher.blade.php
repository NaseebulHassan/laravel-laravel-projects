<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{asset('css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/morrisjs/morris.css')}}" rel="stylesheet">
    
    <link href="{{asset('css/customstyle.css')}}" rel="stylesheet">
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('fonts/css/all.css')}}" rel="stylesheet" >
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

<div id="page-wrapper" >
    <div class="panel panel-default  offset-4 ">
        <div class="panel-heading ">Add Teacher</div>
        <div class="panel-body" style="margin-bottom:60px;">
        @if(count($errors) > 0)
	<div class="alert alert-danger">
		
		@foreach($errors->all() as $error)
				<li class="list">{{$error}}</li>
		@endforeach
	</div>
	@endif

	@if(Session::has('success'))
	<div class="alert alert-success">
		<p>{{Session::get('success')}}</p>
	</div>	
	@endif
 <form class="form col-md-12" method="POST" action="{{url('enrollment/instructor',$instructor->$id )}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">First Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" value="{{$instructors->fname}}" name="fname" id="fname" placeholder="Enter first Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Last Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" value="{{$instructors->lastname}}" name="lastname" id="name" placeholder="Enter Last Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label"> Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" value="{{$instructors->email}}" name="email" id="email" placeholder="Enter  Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Cell No</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                                    <input type="integer" class="form-control" value="{{$instructors->cellno}}" name="cellno" id="cellno" maxlength="12" placeholder="Enter Cell No" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Teacher Type</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-marker fa" aria-hidden="true"></i></span>
                                    <select class="form-control" value="{{$instructors->type}}" name="type" required>
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
                                    <select class="form-control" value="{{$instructors->department}}" name="department" placeholder="Enter Department" required>
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
    
<!-- /#page-wrapper -->

</div>
    <!-- /#wrapper -->
    <link href="" rel="stylesheet">
    
    <script src="{{asset('js/jquery/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/metisMenu.min.js')}}"></script>
    <script src="{{asset('js/raphael.min.js')}}"></script>
    <script src="{{asset('js/morris.min.js')}}"></script>
    <script src="{{asset('js/sb-admin-2.js')}}"></script>
 
    <main class="py-4">
            @yield('content')
        </main>
</body>

</html>
