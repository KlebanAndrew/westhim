@extends('layouts.app')

@section('content')
	@include(
	'sections.banner-area',
	 [
		 'title' => 'Typography',
		 'breadcrumbItems' => [
			 ['title' => 'Home', 'link' => route(\App\Enums\RouteName::HOME)],
			 ['title' => 'Features', 'link' => ''],
			 ['title' => 'Typography', 'link' => ''],
		]
	 ]
	)

	<section id="main-container" class="main-container">
		<div class="container">

			<div class="row">

				<div class="col-lg-6">
					<h3 class="column-title">Heading</h3>

					<h1>h1. Heading 1</h1>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
						some form, by injected humour, or randomised words which don’t look even slightly.</p>
					<h2>h2. Heading 2</h2>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
						some form, by injected humour, or randomised words which don’t look even.</p>
					<h3>h3. Heading 3</h3>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
						some form, by injected humour, or randomised words which don’t look.</p>
					<h4>h4. Heading 4</h4>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
						some form, by injected humour, or randomised words which don’t.</p>
					<h5>h5. Heading 5</h5>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
						some form, by injected humour, or randomised words which.</p>
					<h6>h6. Heading 6</h6>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
						some form, by injected humour, or randomised words.</p>

				</div>
				<!--/ Col end -->

				<div class="col-lg-6">

					<h3 class="column-title">Paragraph</h3>

					<p>Lorem ipsum dolor sit amet, <mark>a mark here</mark> adipisicing elit. Atque, iusto, minus sequi natus
						nesciunt rerum tenetur corrupti autem officiis fugiat expedita laudantium ea aspernatur</p>
					<p><strong class="text-success">Consectetur adipisicing elit</strong>. Corrupti, aliquam, voluptates, nulla,
						blanditiis totam voluptatem <strong class="text-danger">voluptatum quod ipsa debitis non</strong> ab odio
						natus.</p>

					<div class="gap-20"></div>

					<h3 class="column-title">Blockquote</h3>

					<blockquote class="blockquote">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante quam est corrupti ut blanditiis sint aperiam placeatab.</p>
						<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
					</blockquote>

					<blockquote class="blockquote text-center">
						<p>Consectetur adipiscing elit. Integer posuere erat a ante quam est corrupti ut blanditiis sint aperiam placeat minima rerum ab.</p>
						<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
					</blockquote>

					<blockquote class="blockquote text-right">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante quam est corrupti ut blanditiis sint aperiam placeatab.</p>
						<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
					</blockquote>

				</div>
				<!--/ Col end -->

			</div><!-- Content row 1 -->

			<div class="gap-20"></div>

			<div class="row">
				<div class="col-md-12">
					<h3 class="column-title">Alerts</h3>

					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Holy guacamole!</strong> You should check in on some of those fields below.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Holy guacamole!</strong> You should check in on some of those fields below.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="alert alert-danger" role="alert">
						<h4 class="alert-heading">A simple danger alert!</h4>
						<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
						<hr>
						<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
					</div>


				</div><!-- Col end -->
			</div><!-- Content row 2 -->

		</div><!-- Container end -->
	</section><!-- Main container end -->

@endsection