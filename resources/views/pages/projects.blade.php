@extends('layouts.app')

@section('content')
	@include(
	'sections.banner-area',
	 [
		 'title' => 'Продукти',
		 'breadcrumbItems' => [
			 ['title' => 'Домашня', 'link' => route(\App\Enums\RouteName::HOME)],
			 ['title' => 'Продукти', 'link' => ''],
		]
	 ]
	)

	<section id="main-container" class="main-container">
		<div class="container">
			@include('sections.projects_grid', ['categories' => $categories, 'products' => $products, 'show_all_button' => false])
		</div><!-- Conatiner end -->
	</section><!-- Main container end -->

@endsection