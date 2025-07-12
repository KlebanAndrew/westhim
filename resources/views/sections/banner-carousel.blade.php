<div class="banner-carousel banner-carousel-1 mb-0">
	<div class="banner-carousel-item" style="background-image:url({{ URL::asset('images/slider-main/bg2.jpg') }})">
		<div class="slider-content">
			<div class="container h-100">
				<div class="row align-items-center h-100">
					<div class="col-md-12 text-center">
						<h2 class="slide-title" data-animation-in="slideInLeft">{{ trans('general.excellence_in') }}</h2>
						<h3 class="slide-sub-title" data-animation-in="slideInRight">{{ trans('general.industry_name') }}</h3>
						<p data-animation-in="slideInLeft" data-duration-in="1.2">
							<a href="{{ route(\App\Enums\RouteName::SERVICES) }}" class="slider btn btn-primary">{{ trans('general.our_services') }}</a>
							<a href="{{ route(\App\Enums\RouteName::CONTACT) }}" class="slider btn btn-primary border">{{ trans('general.contact_us') }}</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="banner-carousel-item" style="background-image:url({{ URL::asset('images/slider-main/bg1.webp') }})">
		<div class="slider-content text-left">
			<div class="container h-100">
				<div class="row align-items-center h-100">
					<div class="col-md-12">
						<h2 class="slide-title-box" data-animation-in="slideInDown">{{ trans('general.word_class_service') }}</h2>
						<h3 class="slide-title" data-animation-in="fadeIn">{{ trans('general.when_service_matters') }}</h3>
						<h3 class="slide-sub-title" data-animation-in="slideInLeft">{{ trans('general.your_choice_simple') }}</h3>
						<p data-animation-in="slideInRight">
							<a href="{{ route(\App\Enums\RouteName::SERVICES) }}" class="slider btn btn-primary border">{{ trans('general.our_services') }}</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="banner-carousel-item" style="background-image:url({{ URL::asset('images/slider-main/bg3.jpg') }})">
		<div class="slider-content text-right">
			<div class="container h-100">
				<div class="row align-items-center h-100">
					<div class="col-md-12">
						<h2 class="slide-title" data-animation-in="slideInDown">{{ trans('general.meet_our_engineers') }}</h2>
						<h3 class="slide-sub-title" data-animation-in="fadeIn">{{ trans('general.get_consultation') }}</h3>
						<div data-animation-in="slideInLeft">
							<a href="{{ route(\App\Enums\RouteName::SERVICES) }}" class="slider btn btn-primary" aria-label="contact-with-us">{{ trans('general.our_services') }}</a>
							<a href="{{ route(\App\Enums\RouteName::ABOUT) }}" class="slider btn btn-primary border" aria-label="learn-more-about-us">{{ trans('general.learn_more') }}</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>