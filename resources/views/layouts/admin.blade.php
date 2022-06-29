<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Booking Hotel</title>

    <script type="applijewelleryion/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
    </script>

    {{-- Bootstrap Core CSS --}}
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />

    {{-- Custom CSS --}}
    <link href="{{ asset('admin/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('admin/css/morris.css') }}" rel='stylesheet' type='text/css' />

    {{-- Graph CSS --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link href="{{ asset('admin/css/font-awesome.css') }}" rel='stylesheet' type='text/css' /> --}}
    {{-- <link href="{{ asset('admin/css/jquery-ui.css') }}" rel='stylesheet' type='text/css' /> --}}

    {{-- Font Style --}}
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet'
        type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    {{-- Lined Icons --}}
    <link href="{{ asset('admin/css/icon-font.min.css') }}" rel="stylesheet">

    {{-- JQuery --}}
    <script src="{{ asset('admin/js/jquery-2.1.4.min.js') }}" type="text/javascript"></script>

</head>

<body>

    <div class="page-container">
        <div class="left-content">
            <div class="mother-grid-inner">

                <x-admin-header />

                <div class="clearfix"> </div>
            </div>

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/admin/dashboard">Home</a>
                    <i class="fa fa-angle-right"></i>{{ $pages }}
                </li>
            </ol>

            @yield('admin')

            <x-admin-sidebar />
            <div class="clearfix"></div>

            <x-admin-footer />
        </div>
    </div>

    <!--js -->
    <script src="{{ asset('admin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/scripts.js') }}" type="text/javascript"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- /Bootstrap Core JavaScript -->
</body>

</html>
