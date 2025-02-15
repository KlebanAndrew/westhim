@extends('layouts.app')

@section('content')
	@include(
	'sections.banner-area',
	 [
		 'title' => 'Не знайдено',
		 'breadcrumbItems' => [
			 ['title' => 'Домашня', 'link' => route(\App\Enums\RouteName::HOME)],
			 ['title' => '404', 'link' => ''],
		]
	 ]
	)

	<section id="main-container" class="main-container">
		<div class="container">

			<div class="row">

				<div class="col-12">
					<div class="error-page text-center">
						<div class="error-code">
							<h2><strong>404</strong></h2>
						</div>
						<div class="error-message">
							<h3>Oops... Сторінку не знайдено!</h3>
						</div>
						<div class="error-body">
							<a href="{{ route(\App\Enums\RouteName::HOME) }}" class="btn btn-primary">Повернутись на головну</a>
						</div>
					</div>
				</div>

			</div><!-- Content row -->
		</div><!-- Conatiner end -->
	</section><!-- Main container end -->

@endsection
