@extends('layouts.gita_site.app')

@section('content')

	<main role="main">


		<!-- Start Book Overview -->
		<section id="mu-book-overview">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-book-overview-area">


							<!-- Start Book Overview Content -->
							<div class="mu-book-overview-content">
								<div class="row">


                                    <!-- Book Overview Single Content -->
									<div class="col-md-12 col-sm-6">
                                        <a href="{{ route('sloks',['ch'=>$chapter->chapter_number,'sl'=>1]) }}">
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

	</main>

	<!-- End main content -->

@endsection
