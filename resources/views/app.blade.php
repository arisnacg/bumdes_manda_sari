<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield("title") BUMDES Mandala Sari</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset("website/images/icons/favicon.png") }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{  asset("website/vendor/bootstrap/css/bootstrap.min.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{  asset("website/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{  asset("website/fonts/iconic/css/material-design-iconic-font.min.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{  asset("website/vendor/animate/animate.css") }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{  asset("website/vendor/css-hamburgers/hamburgers.min.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{  asset("website/vendor/animsition/css/animsition.min.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{  asset("website/css/util.min.css") }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{  asset("website/css/main.css") }}">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	@include("inc.header")
	@yield('content')
	@include('inc.footer')

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
	</div>
<!--===============================================================================================-->	
	<script src="{{ asset("website/vendor/jquery/jquery-3.2.1.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("website/vendor/animsition/js/animsition.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("website/vendor/bootstrap/js/popper.js") }}"></script>
	<script src="{{ asset("website/vendor/bootstrap/js/bootstrap.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("website/js/main.js") }}"></script>

</body>
</html>