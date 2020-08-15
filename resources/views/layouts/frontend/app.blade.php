<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="76x76" href="{{asset("assets/frontend/img/apple-icon.png")}}">
    <link rel="icon" type="image/png" href="{{asset("assets/frontend/img/favicon.png")}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Material Kit by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->

    <link href="{{("assets/frontend/css/material-kit.css?v=2.0.7")}}" rel="stylesheet" />
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="{{("assets/frontend/demo/demo.css")}}" rel="stylesheet" />
   @stack('css')
</head>
<body>
    
        

        
            @yield('content')
       
        {{-- @include('footer') --}}
    @include('layouts.frontend.partial.footer')





     <!--   Core JS Files   -->
 @stack('js')
 <script src="{{("assets/frontend/js/core/jquery.min.js")}}" type="text/javascript"></script>
 <script src="{{("assets/frontend/js/core/popper.min.js")}}" type="text/javascript"></script>
 <script src="{{("assets/frontend/js/core/bootstrap-material-design.min.js")}}" type="text/javascript"></script>
 <script src="{{("assets/frontend/js/plugins/moment.min.js")}}"></script>
 <script src="{{("assets/frontend/js/plugins/bootstrap-datetimepicker.js")}}" type="text/javascript"></script>
 
 <script src="{{("assets/frontend/js/plugins/nouislider.min.js")}}" type="text/javascript"></script>
 
 <script src="{{("assets/frontend/js/material-kit.js?v=2.0.7")}}" type="text/javascript"></script>
</body>

</html>
