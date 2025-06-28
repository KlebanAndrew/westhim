@extends('layouts.app')

@section('content')
	@include(
	'sections.banner-area',
	 [
		 'title' => 'Продукти',
		 'breadcrumbItems' => [
			 ['title' => trans('menu.home'), 'link' => route(\App\Enums\RouteName::HOME)],
			 ['title' => trans('menu.products'), 'link' => ''],
		]
	 ]
	)

	@php
		/** @var \Illuminate\Support\Collection<\App\Models\Product> $products */
	@endphp
	<section id="main-container" class="main-container pb-2">
		<div class="container">
			<div class="row">
				@foreach($products as $key => $product)
					@php $iconIndex = $key + 1; @endphp
					<div class="col-lg-4 col-md-6 mb-5">
						<div class="ts-service-box">
							<div class="ts-service-image-wrapper">
								<img loading="lazy" class="w-100" src="{{ URL::asset($product->files->first()?->path ?? 'images/image-not-found.jpg') }}" alt="service-image">
							</div>
							<div class="d-flex">
								<div class="ts-service-box-img">
									<img loading="lazy" src="{{ URL::asset("images/icon-image/service-icon$iconIndex.png") }}" alt="service-icon">
								</div>
								<div class="ts-service-info">
									<h3 class="service-box-title"><a href="{{ route(\App\Enums\RouteName::PRODUCTS_SINGLE, ['slug' => $product->slug]) }}">{{ $product->singleText->title }}</a></h3>
									{{--									<p>{{ $product->singleText?->description }}</p>--}}
									<a class="learn-more d-inline-block" href="{{ route(\App\Enums\RouteName::PRODUCTS_SINGLE, ['slug' => $product->slug]) }}" aria-label="service-details"><i class="fa fa-caret-right"></i> Перейти</a>
								</div>
							</div>
						</div><!-- Service1 end -->
					</div><!-- Col 1 end -->
				@endforeach

			</div><!-- Main row end -->
		</div><!-- Conatiner end -->
	</section><!-- Main container end -->

@endsection
