@php
/** @var \Illuminate\Support\Collection<\App\Models\Product> $products */
 @endphp
@extends('layouts.app')

@section('content')
	@include(
	'sections.banner-area',
	 [
		 'title' => 'Питання і відповіді',
		 'breadcrumbItems' => [
			 ['title' => trans('general.home'), 'link' => route(\App\Enums\RouteName::HOME)],
			 ['title' => trans('general.faq'), 'link' => ''],
		]
	 ]
	)

	<section id="main-container" class="main-container">
		<div class="container">

			<div class="row">
				<div class="col-lg-8">
					<h3 class="border-title border-left mar-t0">{{ trans('general.faq') }}</h3>

					<div class="accordion accordion-group accordion-classic" id="construction-accordion">
						<div class="card">
							<div class="card-header p-0 bg-transparent" id="headingOne">
								<h2 class="mb-0">
									<button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne"
											aria-expanded="true" aria-controls="collapseOne">
										{{ trans('pages.faq.questions.1.question') }}
									</button>
								</h2>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
								 data-parent="#construction-accordion">
								<div class="card-body">
									{{ trans('pages.faq.questions.1.answer') }}
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header p-0 bg-transparent" id="headingTwo">
								<h2 class="mb-0">
									<button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
											data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										{{ trans('pages.faq.questions.2.question') }}
									</button>
								</h2>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#construction-accordion">
								<div class="card-body">
									{{ trans('pages.faq.questions.2.answer') }} 
									<a style="color: blue; text-decoration:underline" href="{{ route(\App\Enums\RouteName::CONTACT) }}">{{ trans('general.contacts') }}</a>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header p-0 bg-transparent" id="headingThree">
								<h2 class="mb-0">
									<button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
											data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										{{ trans('pages.faq.questions.3.question') }}
									</button>
								</h2>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree"
								 data-parent="#construction-accordion">
								<div class="card-body">
									{{ trans('pages.faq.questions.3.answer') }}
								</div>
							</div>
						</div>
					</div>
					<!--/ Accordion end -->

				</div><!-- Col end -->

				<div class="col-lg-4 mt-5 mt-lg-0">

					<div class="sidebar sidebar-right">
						<div class="widget recent-posts">
							<h3 class="widget-title">{{ trans('general.our_products') }}</h3>
							<ul class="list-unstyled">
								@foreach($products as $product)
									<li class="d-flex align-items-center">
										<div class="posts-thumb">
											<a href="{{ route(\App\Enums\RouteName::PRODUCTS_SINGLE, ['slug' => $product->slug]) }}">
												@if($product->files->first())
													<img loading="lazy" alt="news-image" src="{{ URL::asset($product->files->first()?->path) }}">
												@endif
											</a>
										</div>
										<div class="post-info">
											<h4 class="entry-title">
												<a href="{{ route(\App\Enums\RouteName::PRODUCTS_SINGLE, ['slug' => $product->slug]) }}">{{ $product->singleText->short_title }}</a>
											</h4>
										</div>
									</li><!-- 1st post end-->
								@endforeach
							</ul>

						</div><!-- Recent post end -->
					</div><!-- Sidebar end -->

				</div><!-- Col end -->

			</div><!-- Content row end -->

		</div><!-- Container end -->
	</section><!-- Main container end -->

@endsection