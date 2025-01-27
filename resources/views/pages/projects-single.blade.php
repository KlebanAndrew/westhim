@extends('layouts.app')

@section('content')
	@include(
	'sections.banner-area',
	 [
		 'title' => 'Продукти',
		 'breadcrumbItems' => [
			 ['title' => 'Домашня', 'link' => route(\App\Enums\RouteName::HOME)],
			 ['title' => 'Продукти', 'link' => route(\App\Enums\RouteName::PRODUCTS)],
			 ['title' => $product->singleText->name, 'link' => ''],
		]
	 ]
	)

	<section id="main-container" class="main-container">
		<div class="container">

			<div class="row">
				<div class="col-lg-8">
					<div id="page-slider" class="page-slider small-bg">
						<div class="item">
							<img loading="lazy" class="img-fluid" src="{{ URL::asset('images/products/kc_3537/kc3537.jpg') }}" alt="project-image" />
						</div>

						<div class="item">
							<img loading="lazy" class="img-fluid" src="{{ URL::asset('images/projects/project4.jpg') }}" alt="project-image" />
						</div>
					</div><!-- Page slider end -->
				</div><!-- Slider col end -->

				<div class="col-lg-4 mt-5 mt-lg-0">

					<h3 class="column-title mrt-0">{{ $product->singleText->name }}</h3>
					<p>{{ $product->singleText->description }}</p>

					<ul class="project-info list-unstyled">
						@foreach($product->singleText->characteristics as $characteristic)
							<li>
								<p class="project-info-label">{{ $characteristic['name'] }}</p>
								<p class="project-info-content">{{ $characteristic['value'] }}</p>
							</li>
						@endforeach
					</ul>

				</div><!-- Content col end -->

			</div><!-- Row end -->

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->

@endsection
