@php /** @var \App\Models\Page $page */ @endphp
@extends('layouts.app')

@section('content')
	@include(
	'sections.banner-area',
	 [
		 'title' => 'Про нас',
		 'breadcrumbItems' => [
			 ['title' => trans('general.home'), 'link' => route(\App\Enums\RouteName::HOME)],
			 ['title' => trans('general.about_us'), 'link' => ''],
		]
	 ]
	)

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12">
					<div class="content-inner-page">

						<h2 class="column-title mrt-0">{{ $page->singleText->title }}</h2>

						<div class="row">
							<div class="col-md-12">
								{!! $page->singleText->description !!}

								@foreach($page->singleText->sections as $section)
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
	@include('sections.facts')
@endsection
