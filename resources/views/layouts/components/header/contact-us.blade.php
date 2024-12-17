<div class="bg-white">
	<div class="container">
		<div class="logo-area">
			<div class="row align-items-center">
				<div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
					<a class="d-block" href="{{ route(\App\Enums\RouteName::HOME) }}">
						<img loading="lazy" src="{{ URL::asset('images/logo.png') }}" alt="Constra">
					</a>
				</div><!-- logo end -->

				<div class="col-lg-9 header-right">
					<ul class="top-info-box">
						<li>
							<div class="info-box">
								<div class="info-box-content">
									<p class="info-box-title">Call Us</p>
									<p class="info-box-subtitle">(+9) 847-291-4353</p>
								</div>
							</div>
						</li>
						<li>
							<div class="info-box">
								<div class="info-box-content">
									<p class="info-box-title">Email Us</p>
									<p class="info-box-subtitle">office@westhim.com</p>
								</div>
							</div>
						</li>
						<li class="last">
							<div class="info-box last">
								<div class="info-box-content">
									<p class="info-box-title">Global Certificate</p>
									<p class="info-box-subtitle">ISO 9001:2017</p>
								</div>
							</div>
						</li>
						<li class="header-get-a-quote">
							<ul>
								@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
									<li>
										<a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
											{{ $properties['native'] }}
										</a>
									</li>
								@endforeach
							</ul>
{{--							<a class="btn btn-primary" href="{{ route(\App\Enums\RouteName::CONTACT) }}">Get A Quote</a>--}}
						</li>
					</ul><!-- Ul end -->
				</div><!-- header right end -->
			</div><!-- logo area end -->

		</div><!-- Row end -->
	</div><!-- Container end -->
</div>