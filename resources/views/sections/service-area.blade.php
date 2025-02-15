<section id="ts-service-area" class="ts-service-area pb-0">
	<div class="container">
		<div class="row text-center">
			<div class="col-12">
				<h2 class="section-title">Ми спеціалісти</h2>
				<h3 class="section-sub-title">Наші сервіси</h3>
			</div>
		</div>
		<!--/ Title row end -->

		<div class="row">
			<div class="col-lg-4">
				<div class="ts-service-box d-flex">
					<div class="ts-service-box-img">
						<img loading="lazy" src="{{ URL::asset('images/icon-image/service-icon1.png') }}" alt="service-icon">
					</div>
					<div class="ts-service-box-info">
						<h3 class="service-box-title"><a href="{{ route(\App\Enums\RouteName::SERVICES_SINGLE, ['slug' => $services[0]->slug]) }}">{{ $services[0]->singleText->name }}</a></h3>
						<p>{{ $services[0]->singleText->description }}</p>
					</div>
				</div><!-- Service 1 end -->

				<div class="ts-service-box d-flex">
					<div class="ts-service-box-img">
						<img loading="lazy" src="{{ URL::asset('images/icon-image/service-icon2.png') }}" alt="service-icon">
					</div>
					<div class="ts-service-box-info">
						<h3 class="service-box-title"><a href="{{ route(\App\Enums\RouteName::SERVICES_SINGLE, ['slug' => $services[1]->slug]) }}">{{ $services[1]->singleText->name }}</a></h3>
						<p>{{ $services[1]->singleText->description }}</p>
					</div>
				</div><!-- Service 2 end -->

				<div class="ts-service-box d-flex">
					<div class="ts-service-box-img">
						<img loading="lazy" src="{{ URL::asset('images/icon-image/service-icon3.png') }}"  alt="service-icon">
					</div>
					<div class="ts-service-box-info">
						<h3 class="service-box-title"><a href="{{ route(\App\Enums\RouteName::SERVICES_SINGLE, ['slug' => $services[2]->slug]) }}">{{ $services[2]->singleText->name }}</a></h3>
						<p>{{ $services[2]->singleText->description }}</p>
					</div>
				</div><!-- Service 3 end -->

			</div><!-- Col end -->

			<div class="col-lg-4 text-center">
				<img loading="lazy" class="img-fluid" src="{{ URL::asset('images/services/service-center.jpg') }}" alt="service-avater-image">
			</div><!-- Col end -->

			<div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
				<div class="ts-service-box d-flex">
					<div class="ts-service-box-img">
						<img loading="lazy" src="{{ URL::asset('images/icon-image/service-icon4.png') }}" alt="service-icon">
					</div>
					<div class="ts-service-box-info">
						<h3 class="service-box-title"><a href="{{ route(\App\Enums\RouteName::SERVICES_SINGLE, ['slug' => $services[3]->slug]) }}">{{ $services[3]->singleText->name }}</a></h3>
						<p>{{ $services[3]->singleText->description }}</p>
					</div>
				</div><!-- Service 4 end -->

				<div class="ts-service-box d-flex">
					<div class="ts-service-box-img">
						<img loading="lazy" src="{{ URL::asset('images/icon-image/service-icon5.png') }}" alt="service-icon">
					</div>
					<div class="ts-service-box-info">
						<h3 class="service-box-title"><a href="{{ route(\App\Enums\RouteName::SERVICES_SINGLE, ['slug' => $services[4]->slug]) }}">{{ $services[4]->singleText->name }}</a></h3>
						<p>{{ $services[4]->singleText->description }}</p>
					</div>
				</div><!-- Service 5 end -->

				<div class="ts-service-box d-flex">
					<div class="ts-service-box-img">
						<img loading="lazy" src="{{ URL::asset('images/icon-image/service-icon6.png') }}" alt="service-icon">
					</div>
					<div class="ts-service-box-info">
						<h3 class="service-box-title"><a href="{{ route(\App\Enums\RouteName::SERVICES_SINGLE, ['slug' => $services[5]->slug]) }}">{{ $services[5]->singleText->name }}</a></h3>
						<p>{{ $services[5]->singleText->description }}</p>
					</div>
				</div><!-- Service 6 end -->
			</div><!-- Col end -->
		</div><!-- Content row end -->

	</div>
	<!--/ Container end -->
</section><!-- Service end -->