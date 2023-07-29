<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>UBS</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('homepage/css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Roboto:400,700&display=swap"
        rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('homepage/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('homepage/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>


    @yield('content')



    <!-- footer section -->
    <footer class="container-fluid footer_section">
        <p>
            &copy; 2019 All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
        </p>
    </footer>
    <!-- footer section -->

    <script src="{{ asset('homepage/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('homepage/js/bootstrap.js') }}"></script>
    <script src="{{ asset('homepage/js/circles.min.js') }}"></script>
    <script src="{{ asset('homepage/js/custom.js') }}"></script>


</body>

</html>
