@extends('layouts.app')

@section('content')
	@include(
	'sections.banner-area',
	 [
		 'title' => 'Our Team',
		 'breadcrumbItems' => [
			 ['title' => 'Home', 'link' => route(\App\Enums\RouteName::HOME)],
			 ['title' => 'Company', 'link' => ''],
			 ['title' => 'Our Team', 'link' => ''],
		]
	 ]
	)

	<section id="main-container" class="main-container pb-4">
		<div class="container">
			<div class="row text-center">
				<div class="col-lg-12">
					<h3 class="section-sub-title">Our Leaderships</h3>
				</div>
			</div>
			<!--/ Title row end -->

			<div class="row justify-content-center">
				<div class="col-lg-3 col-sm-6 mb-5">
					<div class="ts-team-wrapper">
						<div class="team-img-wrapper">
							<img loading="lazy" src="{{ URL::asset('images/team/team1.jpg') }}" class="img-fluid" alt="team-img">
						</div>
						<div class="ts-team-content-classic">
							<h3 class="ts-name">Nats Stenman</h3>
							<p class="ts-designation">Chief Operating Officer</p>
							<p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
							<div class="team-social-icons">
								<a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
								<a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
								<a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
							</div>
							<!--/ social-icons-->
						</div>
					</div>
					<!--/ Team wrapper 1 end -->

				</div><!-- Col end -->

				<div class="col-lg-3 col-sm-6 mb-5">
					<div class="ts-team-wrapper">
						<div class="team-img-wrapper">
							<img loading="lazy" src="{{ URL::asset('images/team/team2.jpg') }}" class="img-fluid" alt="team-img">
						</div>
						<div class="ts-team-content-classic">
							<h3 class="ts-name">ANGELA LYOUER</h3>
							<p class="ts-designation">Innovation Officer</p>
							<p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
							<div class="team-social-icons">
								<a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
								<a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
								<a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
							</div>
							<!--/ social-icons-->
						</div>
					</div>
					<!--/ Team wrapper 2 end -->
				</div><!-- Col end -->

			</div><!-- Content row 1 end -->

			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-6 mb-5">
					<div class="ts-team-wrapper">
						<div class="team-img-wrapper">
							<img loading="lazy" src="{{ URL::asset('images/team/team3.jpg') }}" class="img-fluid" alt="team-img">
						</div>
						<div class="ts-team-content-classic">
							<h3 class="ts-name">Mark Conter</h3>
							<p class="ts-designation">Safety Officer</p>
							<p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
							<div class="team-social-icons">
								<a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
								<a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
								<a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
								<a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
							</div>
							<!--/ social-icons-->
						</div>
					</div>
					<!--/ Team wrapper 3 end -->
				</div><!-- Col end -->

				<div class="col-lg-3 col-md-4 col-sm-6 mb-5">
					<div class="ts-team-wrapper">
						<div class="team-img-wrapper">
							<img loading="lazy" src="{{ URL::asset('images/team/team4.jpg') }}" class="img-fluid" alt="team-img">
						</div>
						<div class="ts-team-content-classic">
							<h3 class="ts-name">AYESHA STEWART</h3>
							<p class="ts-designation">Finance Officer</p>
							<p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
							<div class="team-social-icons">
								<a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
								<a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
								<a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
							</div>
							<!--/ social-icons-->
						</div>
					</div>
					<!--/ Team wrapper 4 end -->

				</div><!-- Col end -->

				<div class="col-lg-3 col-md-4 col-sm-6 mb-5">
					<div class="ts-team-wrapper">
						<div class="team-img-wrapper">
							<img loading="lazy" src="{{ URL::asset('images/team/team5.jpg') }}" class="img-fluid" alt="team-img">
						</div>
						<div class="ts-team-content-classic">
							<h3 class="ts-name">Dave Clarkte</h3>
							<p class="ts-designation">Civil Engineer</p>
							<p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
							<div class="team-social-icons">
								<a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
								<a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
								<a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
							</div>
							<!--/ social-icons-->
						</div>
					</div>
					<!--/ Team wrapper 5 end -->
				</div><!-- Col end -->

				<div class="col-lg-3 col-md-4 col-sm-6 mb-5">
					<div class="ts-team-wrapper">
						<div class="team-img-wrapper">
							<img loading="lazy" src="{{ URL::asset('images/team/team6.jpg') }}" class="img-fluid" alt="team-img">
						</div>
						<div class="ts-team-content-classic">
							<h3 class="ts-name">Elton Joe</h3>
							<p class="ts-designation">Site Supervisor</p>
							<p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
							<div class="team-social-icons">
								<a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
								<a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
								<a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
								<a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
							</div>
							<!--/ social-icons-->
						</div>
					</div>
					<!--/ Team wrapper 6 end -->
				</div><!-- Col end -->
			</div><!-- Content row end -->

		</div><!-- Container end -->
	</section><!-- Main container end -->

@endsection