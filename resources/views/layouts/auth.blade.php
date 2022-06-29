<!DOCTYPE html>
<html>

<head>
    
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Booking Hotel</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">


    <link rel="icon" href="images/logo.png" type="image/png">

    <style>
        body{
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.2));
            background-repeat: none; 
            background-size: cover;
            background-image: url({{ asset('background/wp4676582.jpg') }});
        }
    </style>

</head>

<body oncontextmenu='return false' class='snippet-body'>

    
    
    @yield('content')


    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'></script>
</body>

</html>
