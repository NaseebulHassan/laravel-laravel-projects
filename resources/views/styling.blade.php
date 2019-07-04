<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="{{URL::to('../css/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('../css/sb-admin-2.css')}}">
    <link rel="stylesheet" href="{{URL::to('../css/metisMenu/metismenu.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('../css/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('../css/customstyle.css')}}">
    <link rel="stylesheet" href="{{URL::to('../fonts/css/all.css')}}">
    @yield('styles')
</head>
<body>
@yield('content')
<script src="{{URL::to('../js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::to('../js/jquery/jquery-2.min.js')}}"></script>
<script src="{{URL::to('../js/jquery/jquery.js')}}"></script>
<script src="{{URL::to('../js/jquery/jqueryfile.js')}}"></script>
<script src="{{URL::to('../js/admin.js')}}"></script>
<script src="{{URL::to('../js/script.js')}}"></script>
<script src="{{URL::to('../js/bootstrap.min.js')}}"></script>
<script src="{{URL::to('../js/manu.min.js')}}"></script>
<script src="{{URL::to('../js/raphael.js')}}"></script>
<script src="{{URL::to('../js/raphael.min.js')}}"></script>
<script src="{{URL::to('../js/morris.min.js')}}"></script>
<script src="{{URL::to('../js/morris-data.js')}}"></script>
<script src="{{URL::to('../js/admin.js')}}"></script>
<script src="{{URL::to('../js/table.js')}}"></script>

@yield('scripts')
</body>
</html>