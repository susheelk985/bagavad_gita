@extends('layouts.gita_site.app')

@section('content')
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
									<div class="col-md-12 col-sm-6">
                                        <a href="{{ route('sloks',$chapter->chapter_number) }}">
										<div class="mu-book-overview-single" style="background-color:slategrey;color:white">

											<span class="mu-book-overview-icon-box">
                                                Chapter {{ $chapter->chapter_number }}
											</span>
											<h3>{{ $chapter->translation }}</h3>
											<p>Verses: {{ $chapter->verses_count }}</p>
                                            <h6>Summary</h6>
                                            <p>{{ $chapter->summary->en }}</p>

										</div>
                                    </a>
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

@endsection
