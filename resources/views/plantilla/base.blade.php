<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    @yield('style')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('public/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/estilos.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/bootstrap-material-design.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/ripples.min.css')}}" rel="stylesheet">



</head>
<body>



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('public/js/bootstrap.js')}}"></script>
    <script src="{{asset('public/js/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('public/js/material.min.js')}}"></script>
    <script src="{{asset('public/js/ripples.min.js')}}"></script>
    

    <script type="text/javascript">
      $.material.init();
    </script>
    @yield('script')
</body>
</html>
