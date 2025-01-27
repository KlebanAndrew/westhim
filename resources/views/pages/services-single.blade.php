@php 
	use App\Enums\RouteName;
	/* @var \App\Models\Service $service */
@endphp

@extends('layouts.app')

@section('content')
	@include(
	'sections.banner-area',
	 [
		 'title' => 'Послуги',
		 'breadcrumbItems' => [
			 ['title' => 'Домашня', 'link' => route(RouteName::HOME)],
			 ['title' => 'Послуги', 'link' => route(RouteName::SERVICES)],
			 ['title' => $service->singleText->name, 'link' => ''],
		]
	 ]
	)

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">

				<div class="col-xl-3 col-lg-4">
					<div class="sidebar sidebar-left">
						<div class="widget">
							<h3 class="widget-title">Сервіси</h3>
							<ul class="nav service-menu">
								@foreach($services as $singleService)
									<li @if($singleService->slug === $service->slug) class="active" @endif>
										<a href="{{ route(RouteName::SERVICES_SINGLE, ['slug' => $singleService->slug]) }}">
											{{ $singleService->singleText->name }}
										</a>
									</li>
								@endforeach
							</ul>
						</div><!-- Widget end -->

					</div><!-- Sidebar end -->
				</div><!-- Sidebar Col end -->

				<div class="col-xl-8 col-lg-8">
					<div class="content-inner-page">

						<h2 class="column-title mrt-0">{{ $service->singleText->name }}</h2>

						<div class="row">
							<div class="col-md-12">
								<p>{{ $service->singleText->description }}</p>
							</div><!-- col end -->
						</div><!-- 1st row end-->

						<div class="gap-40"></div>

						<div id="page-slider" class="page-slider">
							@foreach($service->files as $file)
								<div class="item">
									<img loading="lazy" class="img-fluid"
										 src="{{ URL::asset($file->path) }}" alt="{{ $file->alter_text ?? 'project-slider-image' }}"/>
								</div>
							@endforeach
						</div><!-- Page slider end -->

						<div class="gap-40"></div>

						<div class="row">
							<div class="col-md-6">
								<h3 class="column-title-small">Характеристики</h3>

								{{--								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf--}}
								{{--									moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.--}}
								{{--									Consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat--}}
								{{--									tincidunt nunc posuere.</p>--}}
								<ul class="list-arrow">
									@foreach($service->singleText->characteristics as $characteristics)
										<li>{{ $characteristics }}</li>
									@endforeach
								</ul>
							</div>

							<div class="col-md-6 mt-5 mt-md-0">
								<h3 class="column-title-small">Ціни</h3>

								<div class="accordion accordion-group accordion-classic" id="construction-accordion">
									@foreach($service->singleText->prices as $key=>$price)
										<div class="card">
											<div class="card-header p-0 bg-transparent" id="heading{{ $key }}">
												<h2 class="mb-0">
													<button class="btn btn-block text-left" type="button"
															data-toggle="collapse"
															data-target="#collapse{{ $key }}" @if($key === 0) aria-expanded="true" @else aria-expanded="false" @endif
															aria-controls="collapse{{ $key }}">
														{{ $price['group_name'] }}
													</button>
												</h2>
											</div>

											<div id="collapse{{ $key }}" class="collapse @if($key === 0) show @endif" aria-labelledby="heading{{ $key }}"
												 data-parent="#construction-accordion">
												<div class="card-body">
													@foreach($price['group_prices'] as $groupPrice)
														<p>{{ $groupPrice }}</p>
													@endforeach
												</div>
											</div>
										</div>
									@endforeach
								</div>
								<!--/ Accordion end -->
							</div>
						</div>
						<!--2nd row end -->

						<div class="gap-40"></div>

						<div class="call-to-action classic">
							<div class="row align-items-center">
								<div class="col-md-8 text-center text-md-left">
									<div class="call-to-action-text">
										<h3 class="action-title">
											{{ $service->singleText->price_conditions_text }}
											<p>*Всі ціни вказані без ПДВ.</p>
										</h3>
									</div>
								</div><!-- Col end -->
								<div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
									<div class="call-to-action-btn">
										<a class="btn btn-primary" href="#">Замовити</a>
									</div>
								</div><!-- col end -->
							</div><!-- row end -->
						</div><!-- Action end -->

					</div><!-- Content inner end -->
				</div><!-- Content Col end -->


			</div><!-- Main row end -->
		</div><!-- Conatiner end -->
	</section><!-- Main container end -->

@endsection
