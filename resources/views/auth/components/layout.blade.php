<!DOCTYPE html>
<html lang="en">

<head>
    <title>UBS Auth</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    -->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/main.css')}}">
    <!--===============================================================================================-->
    <!-- Alpine js -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <!--===============================================================================================-->
</head>

<body>

    @yield('content')



    <!--===============================================================================================-->
    <script src="{{ asset('auth/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('auth/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{ asset('auth/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('auth/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('auth/vendor/tilt/tilt.jquery.min.js')}}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('auth/js/main.js')}}"></script>



</body>

</html>
