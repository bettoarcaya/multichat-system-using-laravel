<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    @yield('style')
    {!! Html::style("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css") !!}
    {!! Html::style("css/bootstrap.css") !!}
    {!! Html::style("css/estilos.css") !!}
    {!! Html::style("css/bootstrap-material-design.min.css") !!}
    {!! Html::style("css/ripples.min.css") !!}



</head>
<body>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    {!! Html::script("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js") !!}
    {!! Html::script('js/bootstrap.js') !!}
    {!! Html::script('js/jquery-2.1.1.js') !!}
    {!! Html::script('js/material.min.js') !!}
    {!! Html::script('js/ripples.min.js') !!}

    <script type="text/javascript">
      $.material.init();
    </script>
    @yield('script')
</body>
</html>
