@extends('layouts.app')

@section('content')
	@include(
	'sections.banner-area',
	 [
		 'title' => 'Home',
		 'breadcrumbItems' => [
			 ['title' => 'Home', 'link' => route(\App\Enums\RouteName::HOME)],
			 ['title' => 'News', 'link' => ''],
			 ['title' => 'News left sidebar', 'link' => ''],
		]
	 ]
	)

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">

				<div class="col-lg-4 order-1 order-lg-0">

					<div class="sidebar sidebar-left">
						<div class="widget recent-posts">
							<h3 class="widget-title">Recent Posts</h3>
							<ul class="list-unstyled">
								<li class="d-flex align-items-center">
									<div class="posts-thumb">
										<a href="#"><img loading="lazy" alt="img" src="{{ URL::asset('images/news/news1.jpg') }}"></a>
									</div>
									<div class="post-info">
										<h4 class="entry-title">
											<a href="#">We Just Completes $17.6 Million Medical Clinic In Mid-missouri</a>
										</h4>
									</div>
								</li><!-- 1st post end-->

								<li class="d-flex align-items-center">
									<div class="posts-thumb">
										<a href="#"><img loading="lazy" alt="img" src="{{ URL::asset('images/news/news2.jpg') }}"></a>
									</div>
									<div class="post-info">
										<h4 class="entry-title">
											<a href="#">Thandler Airport Water Reclamation Facility Expansion Project Named</a>
										</h4>
									</div>
								</li><!-- 2nd post end-->

								<li class="d-flex align-items-center">
									<div class="posts-thumb">
										<a href="#"><img loading="lazy" alt="img" src="{{ URL::asset('images/news/news3.jpg') }}"></a>
									</div>
									<div class="post-info">
										<h4 class="entry-title">
											<a href="#">Silicon Bench And Cornike Begin Construction Solar Facilities</a>
										</h4>
									</div>
								</li><!-- 3rd post end-->

							</ul>

						</div><!-- Recent post end -->

						<div class="widget">
							<h3 class="widget-title">Categories</h3>
							<ul class="arrow nav nav-tabs">
								<li><a href="#">Construction</a></li>
								<li><a href="#">Commercial</a></li>
								<li><a href="#">Building</a></li>
								<li><a href="#">Safety</a></li>
								<li><a href="#">Structure</a></li>
							</ul>
						</div><!-- Categories end -->

						<div class="widget">
							<h3 class="widget-title">Archives </h3>
							<ul class="arrow nav nav-tabs">
								<li><a href="#">Feburay 2016</a></li>
								<li><a href="#">January 2016</a></li>
								<li><a href="#">December 2015</a></li>
								<li><a href="#">November 2015</a></li>
								<li><a href="#">October 2015</a></li>
							</ul>
						</div><!-- Archives end -->

						<div class="widget widget-tags">
							<h3 class="widget-title">Tags </h3>

							<ul class="list-unstyled">
								<li><a href="#">Construction</a></li>
								<li><a href="#">Design</a></li>
								<li><a href="#">Project</a></li>
								<li><a href="#">Building</a></li>
								<li><a href="#">Finance</a></li>
								<li><a href="#">Safety</a></li>
								<li><a href="#">Contracting</a></li>
								<li><a href="#">Planning</a></li>
							</ul>
						</div><!-- Tags end -->


					</div><!-- Sidebar end -->
				</div><!-- Sidebar Col end -->

				<div class="col-lg-8 mb-5 mb-lg-0 order-0 order-lg-1">
					<div class="post">
						<div class="post-media post-image">
							<img loading="lazy" src="{{ URL::asset('images/news/news1.jpg') }}" class="img-fluid" alt="post-image">
						</div>

						<div class="post-body">
							<div class="entry-header">
								<div class="post-meta">
                <span class="post-author">
                  <i class="far fa-user"></i><a href="#"> Admin</a>
                </span>
									<span class="post-cat">
                  <i class="far fa-folder-open"></i><a href="#"> News</a>
                </span>
									<span class="post-meta-date"><i class="far fa-calendar"></i> June 14, 2016</span>
									<span class="post-comment"><i class="far fa-comment"></i> 03<a href="#"
																								   class="comments-link">Comments</a></span>
								</div>
								<h2 class="entry-title">
									<a href="{{ route(\App\Enums\RouteName::NEWS_SINGLE) }}">We Just Completes $17.6 million Medical Clinic in Mid-Missouri</a>
								</h2>
							</div><!-- header end -->

							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
									dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
									ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
									fugiat nulla pariatur. Excepteur ...</p>
							</div>

							<div class="post-footer">
								<a href="{{ route(\App\Enums\RouteName::NEWS_SINGLE) }}" class="btn btn-primary">Continue Reading</a>
							</div>

						</div><!-- post-body end -->
					</div><!-- 1st post end -->

					<div class="post">
						<div class="post-media post-video">
							<div class="embed-responsive embed-responsive-16by9">
								<!-- Change the url -->
								<iframe class="embed-responsive-item" src="//player.vimeo.com/video/153089270?title=0&amp;byline=0&amp;portrait=0&amp;color=8aba56" allowfullscreen></iframe>
							</div>
						</div>

						<div class="post-body">
							<div class="entry-header">
								<div class="post-meta">
                <span class="post-author">
                  <i class="far fa-user"></i><a href="#"> Admin</a>
                </span>
									<span class="post-cat">
                  <i class="far fa-folder-open"></i><a href="#"> News</a>
                </span>
									<span class="post-meta-date"><i class="far fa-calendar"></i> June 14, 2016</span>
									<span class="post-comment"><i class="far fa-comment"></i> 03<a href="#"
																								   class="comments-link">Comments</a></span>
								</div>
								<h2 class="entry-title">
									<a href="{{ route(\App\Enums\RouteName::NEWS_SINGLE) }}">Thandler Airport Water Reclamation Facility Expansion Project Named</a>
								</h2>
							</div><!-- header end -->

							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
									dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
									ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
									fugiat nulla pariatur. Excepteur ...</p>
							</div>

							<div class="post-footer">
								<a href="{{ route(\App\Enums\RouteName::NEWS_SINGLE) }}" class="btn btn-primary">Continue Reading</a>
							</div>

						</div><!-- post-body end -->
					</div><!-- 2nd post end -->

					<div class="post">
						<div class="post-media post-image">
							<img loading="lazy" src="{{ URL::asset('images/news/news3.jpg') }}" class="img-fluid" alt="post-image">
						</div>

						<div class="post-body">
							<div class="entry-header">
								<div class="post-meta">
                <span class="post-author">
                  <i class="far fa-user"></i><a href="#"> Admin</a>
                </span>
									<span class="post-cat">
                  <i class="far fa-folder-open"></i><a href="#"> News</a>
                </span>
									<span class="post-meta-date"><i class="far fa-calendar"></i> June 14, 2016</span>
									<span class="post-comment"><i class="far fa-comment"></i> 03<a href="#"
																								   class="comments-link">Comments</a></span>
								</div>
								<h2 class="entry-title">
									<a href="{{ route(\App\Enums\RouteName::NEWS_SINGLE) }}">Silicon Bench and Cornike Begin Construction of Large-Scale Solar Facilities
										for Trade</a>
								</h2>
							</div><!-- header end -->

							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
									dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
									ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
									fugiat nulla pariatur. Excepteur ...</p>
							</div>

							<div class="post-footer">
								<a href="{{ route(\App\Enums\RouteName::NEWS_SINGLE) }}" class="btn btn-primary">Continue Reading</a>
							</div>

						</div><!-- post-body end -->
					</div><!-- 3rd post end -->

					<nav class="paging" aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
						</ul>
					</nav>

				</div><!-- Content Col end -->

			</div><!-- Main row end -->

		</div><!-- Container end -->
	</section><!-- Main container end -->

@endsection