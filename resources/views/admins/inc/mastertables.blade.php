<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="Brian Anikayi">
	<meta name="keywords" content="Sisdo Intranet System">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{asset('clientsdash/img/icons/icon-48x48.png')}}" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>UBS System</title>

	<!-- <link href="css/app.css" rel="stylesheet"> -->
    <link href="{{asset('adminsdash/css/app.css')}}" rel="stylesheet">
	<!-- BEGIN SETTINGS -->

	<!-- BEGIN SETTINGS -->
	<script src="{{asset('adminsdash/js/settings.js')}}"></script>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">

        <!-- side bar start -->
              @include('admins.inc.sidebar')
         <!-- side bar end -->

		<div class="main">

            <!-- top bar link -->

            @include('admins.inc.header')

            <!-- end of top bar -->

            @yield('content')



            @include('admins.inc.footer')

		</div>
	</div>


    <script src="{{asset('adminsdash/js/app.js')}}"></script>
	<script src="{{asset('adminsdash/js/datatables.js')}}"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables with Buttons
			var datatablesButtons = $("#datatables-buttons").DataTable({
				responsive: true,
				lengthChange: !1,
				buttons: ["copy", "print"]
			});
			datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)");
		});
	</script>




</body>

</html>
