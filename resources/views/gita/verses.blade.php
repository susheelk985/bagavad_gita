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
                                    @foreach ($verses as $verse)
                                        <!-- Book Overview Single Content -->
									    <div class="col-md-12 col-sm-6">
                                        <div class="mu-book-overview-single" style="background-color:slategrey;color:white">
                                                <span class="mu-book-overview-icon-box">
                                                    Verse: {{ $verse->verse_number }}
                                                </span>
                                                <h3 style="color:#ff9933" class="notranslate">{{ $verse->text }}</h3>
                                                <h3>{{ $verse->transliteration }}</h3>
                                                <h6>Word Meaning</h6>
                                                <p>{{ $verse->word_meanings }}</p>

                                                <hr style="border-top: 3px dashed rgb(0, 255, 34);">

                                                <h6>Translation</h6>
                                                <?php
                                                    $collect =  collect($verse->translations);
                                                    $translation = $collect->where('author_name','Swami Adidevananda')->first();

													$collect_commentary =  collect($verse->commentaries);
                                                    $translation_commentary = $collect_commentary->where('author_name','Swami Sivananda')->first();
                                                    // $description = json_decode($description);
                                                ?>

                                                <p>{{ $translation->description }}</p><br>
												<h6>Commentary</h6>
                                                <p>{{ $translation_commentary->description }}</p>





                                            </div>
                                        </div>
                                        <!-- / Book Overview Single Content -->
                                    @endforeach


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
