
<!DOCTYPE html>
<html>
    <head>
        <title>TRUSTCOMM</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="LTMB MIS Application"/>
        <link href="{{ asset('assets/front_landing/img/livingtrust-logo.png') }}" rel="shortcut icon" type="image/x-icon">

        <link href="{{ asset('assets/front_landing/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('assets/front_landing/css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('assets/front_landing/css/sweetalert2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/front_landing/css/fontawesome-free-5.15.3-web/css/all.css') }}" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    </head>
    <body>

    <!-- main -->
        @yield('content')
    <!-- //main -->

    <script src="{{ asset('assets/front_landing/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/front_landing/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/front_landing/js/monetization.js') }}"></script>
    <script async src='{{ asset('assets/front_landing/js/monetization.js') }}'></script>
    <script async src='{{ asset('assets/front_landing/js/autotrack.js') }}'></script>
    <script async src='{{ asset('assets/front_landing/js/custom.js') }}'></script>
    <script async src='{{ asset('assets/front_landing/css/fontawesome-free-5.15.3-web/js/all.js') }}'></script>
    </body>
</html>
