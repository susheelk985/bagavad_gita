<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bagavad Gita</title>
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
				      <a class="navbar-brand" href="index.html"><img src="{{ url('storage/images/logo.png') }}" height="50px" width="50px"></a>


				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      	<ul class="nav navbar-nav mu-menu navbar-right">
					        <li><a href="#">HOME</a></li>
					        <li><a href="#mu-book-overview">OVERVIEW</a></li>
				            <li><a href="#mu-pricing">DONATE</a></li>
				            {{-- <li><a href="#mu-contact">CONTACT</a></li> --}}
				      	</ul>
				    </div><!-- /.navbar-collapse -->
			  	</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
	<!-- End Header -->

	<!-- Start Featured Slider -->

	<section id="mu-hero">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-6 col-sm-push-6">
					<div class="mu-hero-right">
						<img src="{{ url('storage/images/ebook.jpg') }}" alt="Ebook img" height="100%" width="100%">
					</div>
				</div>

				<div class="col-md-6 col-sm-6 col-sm-pull-6">
					<div class="mu-hero-left">
						<h1>Bagavad Gita</h1>
						<p>Bhagavadgita, an episode recorded in the great Sanskrit poem of the Hindus, the Mahabharata. It occupies chapters 23 to 40 of Book VI of the Mahabharata and is composed in the form of a dialogue between Prince Arjuna and Krishna, an avatar (incarnation) of the god Vishnu. It is a 700-verse text in Sanskrit which comprises chapters 23 through 40 in the Bhishma-Parva section of the Mahabharata.</p>
						{{-- <a href="#" class="mu-primary-btn">Download</a> --}}

					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Start Featured Slider -->

	<!-- Start main content -->

	<main role="main">


		<!-- Start Book Overview -->
		<section id="mu-book-overview">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-book-overview-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Overview</h2>
								<span class="mu-header-dot"></span>
								<p>Bagavad Gita contains 18 chapters.The Bhagavad Gita is set in a narrative framework of dialogue between the Pandava prince Arjuna and his charioteer guide Krishna, an avatar of Vishnu. At the start of the Kurukshetra War between the Pandavas and the Kauravas, Arjuna despairs thinking about the violence and death the war will cause in the battle against his kin and becomes emotionally preoccupied with a dilemma. Wondering if he should renounce the war, Arjuna seeks the counsel of Krishna, whose answers and discourse constitute the Bhagavad Gita. Krishna counsels Arjuna to "fulfil his Kshatriya (warrior) duty" for the upholding of dharma. The Krishna–Arjuna dialogue covers a broad range of spiritual topics, touching upon moral and ethical dilemmas, and philosophical issues that go far beyond the war that Arjuna faces. The setting of the text in a battlefield has been interpreted as an allegory for the struggles of human life.</p>
							</div>

							<!-- Start Book Overview Content -->
							<div class="mu-book-overview-content">
								<div class="row">

									<!-- Book Overview Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												1
											</span>
											<h4>Chapter One</h4>
											<p>example text</p>
										</div>
									</div>
									<!-- / Book Overview Single Content -->


								</div>
							</div>
							<!-- End Book Overview Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Book Overview -->



		{{-- <!-- Start Video Review -->
		<section id="mu-video-review">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-video-review-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Check Out Our Video Review</h2>
								<span class="mu-header-dot"></span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
							</div>

							<!-- Start Video Review Content -->
							<div class="mu-video-review-content">
								<iframe class="mu-video-iframe" width="100%" height="480" src="https://www.youtube.com/embed/T4ySAlBt2Ug" frameborder="0" allowfullscreen></iframe>
							</div>
							<!-- End Video Review Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Video Review --> --}}


		<!-- Start Pricing -->
		<section id="mu-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-pricing-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Donate</h2>
								<span class="mu-header-dot"></span>
								<p>Your donation is to  maintain this website and continues add free to use for future.</p>
                                <img src="{{ url('storage/images/GooglePay_QR.png') }}" alt="Donate_Qr img" height="35%" width="35%">
							</div>



						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Pricing -->

	</main>

	<!-- End main content -->


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


  </body>
</html>
