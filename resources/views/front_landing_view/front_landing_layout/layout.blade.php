<!DOCTYPE html>
<html>

<head>
    <title>TRUSTCOMM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="LTMB MIS Application" />
    <link href="{{ asset('assets/front_landing/img/livingtrust-logo.png') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('assets/front_landing/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/front_landing/css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/front_landing/css/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front_landing/css/fontawesome-free-5.15.3-web/css/all.css') }}" type="text/css"
        media="all" />
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <style>
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: .25rem;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        .alert-danger a.close {
            color: #721c24;
        }

        .alert-danger a.close:hover {
            color: #721c24;
        }

        .alert-danger.fade.show {
            opacity: 1;
            transition: opacity 0.15s linear;
        }
    </style>

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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
