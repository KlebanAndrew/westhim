@php
	use App\Enums\RouteName;
	/* @var \App\Models\Service $product */
	/* @var \Illuminate\Support\Collection<\App\Models\Product> $products */
    /* @var \App\Models\Product $product */
@endphp

@extends('layouts.app')

@section('content')
	@include(
	'sections.banner-area',
	 [
		 'title' => trans('menu.products'),
		 'breadcrumbItems' => [
			 ['title' => trans('menu.home'), 'link' => route(RouteName::HOME)],
			 ['title' => trans('menu.products'), 'link' => route(RouteName::PRODUCTS)],
			 ['title' => $product->singleText->short_title, 'link' => ''],
		]
	 ]
	)

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">

				<div class="col-xl-3 col-lg-4">
					<div class="sidebar sidebar-left">
						<div class="widget">
							<h3 class="widget-title">{{ trans('general.products') }}</h3>
							<ul class="nav service-menu">
								@foreach($products as $singleProduct)
									<li @if($singleProduct->slug === $product->slug) class="active" @endif>
										<a href="{{ route(RouteName::PRODUCTS_SINGLE, ['slug' => $singleProduct->slug]) }}">
											{{ $singleProduct->singleText->short_title }}
										</a>
									</li>
								@endforeach
							</ul>
						</div><!-- Widget end -->

					</div><!-- Sidebar end -->
				</div><!-- Sidebar Col end -->

				<div class="col-xl-8 col-lg-8">
					<div class="content-inner-page">

						<h2 class="column-title mrt-0">{{ $product->singleText->title }}</h2>

						<div class="row">
							<div class="col-md-12">
								{!! $product->singleText->description !!}
								
								@foreach($product->singleText->sections as $section)
									<h3>{{ \Illuminate\Support\Arr::get($section, 'title', '') }}</h3>
									{!! \Illuminate\Support\Arr::get($section, 'text', '') !!}
								@endforeach
							</div><!-- col end -->
						</div><!-- 1st row end-->

						<div class="gap-40"></div>

					</div><!-- Content inner end -->
				</div><!-- Content Col end -->


			</div><!-- Main row end -->
		</div><!-- Conatiner end -->
	</section><!-- Main container end -->

@endsection
