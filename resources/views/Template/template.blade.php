<html>
    <head>
        <title></title>
        {!! Html::style('Assets/css/boostrap.min.css') !!}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
        <body>
            @yield('content')
            {!! Html::script('Assets/js/jquery.min.js') !!}
            {!! Html::script('Assets/js/boostrap.min.js') !!}
        </body>
    </head>
</html>