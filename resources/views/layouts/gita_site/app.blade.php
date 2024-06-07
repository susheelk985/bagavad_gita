<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ url('storage/images/logo.png') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.png"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ URL::asset('storage/css/bootstrap.min.css'); }}" rel="stylesheet">
    <!-- Slick slider -->
    <link href="{{ URL::asset('storage/css/slick.css'); }}" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="{{ URL::asset('storage/css/theme-color/default-theme.css'); }}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{ URL::asset('storage/css/style.css'); }}" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Lato for Title -->
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style>
        body {
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>

</head>

<body>
    <!-- Start Header -->
	<header id="mu-header" class="" role="banner">
		<div class="container">
			<nav class="navbar navbar-default mu-navbar">
			  	<div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>

				      <!-- Text Logo
				      <a class="navbar-brand" href="index.html"><i class="fa fa-book" aria-hidden="true"></i> Kindle</a> -->

				      <!-- Image Logo -->
				      <a class="navbar-brand" href=""><img src="{{ url('storage/images/logo.png') }}" height="50px" width="50px"></a>


				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      	<ul class="nav navbar-nav mu-menu navbar-right">
					        <li><a href="#">HOME</a></li>
					        <li><a href="#mu-book-overview">OVERVIEW</a></li>
				            <li><a href="#mu-pricing">DONATE</a></li>
                            <div id="google_translate_element"></div>
				            {{-- <li><a href="#mu-contact">CONTACT</a></li> --}}
				      	</ul>
				    </div><!-- /.navbar-collapse -->
			  	</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
	<!-- End Header -->

    <main class="py-4">
        @yield('content')
    </main>

    <!-- Start footer -->
	<footer id="mu-footer" role="contentinfo">
		<div class="container">
			<div class="mu-footer-area">
				<div class="mu-social-media">
					<a href="https://github.com/susheelk985"><i class="fa fa-github"></i></a>
					<a href="mailto:susheelk985@gmail.com"><i class="fa fa-envelope"></i></a>
				</div>
				<p class="mu-copyright">&copy; Copyright <a rel="nofollow" href="https://github.com/susheelk985">susheelk985</a>. All right reserved.</p>
			</div>
		</div>

	</footer>
	<!-- End footer -->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="{{ URL::asset('storage/js/bootstrap.min.js'); }}"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="{{ URL::asset('storage/js/slick.min.js'); }}"></script>
    <!-- Counter js -->
    {{-- <script type="text/javascript" src="{{ URL::asset('storage/js/counter.js'); }}"></script> --}}
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="{{ URL::asset('storage/js/app.js'); }}"></script>



    <!-- Custom js -->
	<script type="text/javascript" src="{{ URL::asset('storage/js/custom.js'); }}"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
        </script>

        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    @yield('java_script')
</body>
</html>
