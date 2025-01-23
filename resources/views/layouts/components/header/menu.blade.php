@php use App\Enums\RouteName; @endphp
<div class="site-navigation">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-expand-lg navbar-dark p-0">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
							aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div id="navbar-collapse" class="collapse navbar-collapse">
						<ul class="nav navbar-nav mr-auto">
							<li class="nav-item dropdown active">
								<a href="#" class="nav-link dropdown-toggle"
								   data-toggle="dropdown">{{ trans('menu.home') }}<i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li class="active"><a
											href="{{ route(RouteName::HOME) }}">{{ trans('menu.home') }}</a></li>
								</ul>
							</li>

							<li class="nav-item dropdown">
								<a href="#" class="nav-link dropdown-toggle"
								   data-toggle="dropdown">{{ trans('menu.company') }} <i
										class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="{{ route(RouteName::ABOUT) }}">{{ trans('menu.about_us') }}</a></li>
									<li><a href="{{ route(RouteName::TEAM) }}">{{ trans('menu.our_people') }}</a></li>
									<li>
										<a href="{{ route(RouteName::TESTIMONIALS) }}">{{ trans('menu.testimonials') }}</a>
									</li>
									<li><a href="{{ route(RouteName::FAQ) }}">{{ trans('menu.faq') }}</a></li>
									<li><a href="{{ route(RouteName::PRICING) }}">{{ trans('menu.pricing') }}</a></li>
								</ul>
							</li>

							<li class="nav-item dropdown">
								<a href="#" class="nav-link dropdown-toggle"
								   data-toggle="dropdown">{{ trans('menu.projects') }} <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="{{ route(RouteName::PROJECTS) }}">{{ trans('menu.projects_all') }}</a>
									</li>
									<li>
										<a href="{{ route(RouteName::PROJECTS_SINGLE) }}">{{ trans('menu.projects_single') }}</a>
									</li>
								</ul>
							</li>

							<li class="nav-item dropdown">
								<a href="#" class="nav-link dropdown-toggle"
								   data-toggle="dropdown">{{ trans('menu.services') }} <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="{{ route(RouteName::SERVICES) }}">{{ trans('menu.services_all') }}</a>
									</li>
									@foreach($services as $service)
										<li>
											<a href="{{ route(RouteName::SERVICES_SINGLE, ['slug' => $service->slug]) }}">{{ $service->singleText->name }}</a>
										</li>
									@endforeach
								</ul>
							</li>

							<li class="nav-item dropdown">
								<a href="#" class="nav-link dropdown-toggle"
								   data-toggle="dropdown">{{ trans('menu.features') }} <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="{{ route(RouteName::TYPOGRAPHY) }}">{{ trans('menu.typography') }}</a>
									</li>
									<li><a href="{{ route(RouteName::NOT_FOUND) }}">{{ trans('menu.404') }}</a></li>
									<li class="dropdown-submenu">
										<a href="#!" class="dropdown-toggle"
										   data-toggle="dropdown">{{ trans('menu.parent_menu') }}</a>
										<ul class="dropdown-menu">
											<li><a href="#!">{{ trans('menu.child_menu') }}</a></li>
											<li><a href="#!">{{ trans('menu.child_menu') }}</a></li>
											<li><a href="#!">{{ trans('menu.child_menu') }}</a></li>
										</ul>
									</li>
								</ul>
							</li>

							<li class="nav-item dropdown">
								<a href="#" class="nav-link dropdown-toggle"
								   data-toggle="dropdown">{{ trans('menu.news') }} <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li>
										<a href="{{ route(RouteName::NEWS_LEFT_SIDEBAR) }}">{{ trans('menu.news_left_sidebar') }}</a>
									</li>
									<li>
										<a href="{{ route(RouteName::NEWS_RIGHT_SIDEBAR) }}">{{ trans('menu.news_right_sidebar') }}</a>
									</li>
									<li>
										<a href="{{ route(RouteName::NEWS_SINGLE) }}">{{ trans('menu.news_single') }}</a>
									</li>
								</ul>
							</li>

							<li class="nav-item"><a class="nav-link"
													href="{{ route(RouteName::CONTACT) }}">{{ trans('menu.contact') }}</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<!--/ Col end -->
		</div>
		<!--/ Row end -->

		<div class="nav-search">
			<span id="search"><i class="fa fa-search"></i></span>
		</div><!-- Search end -->

		<div class="search-block" style="display: none;">
			<label for="search-field" class="w-100 mb-0">
				<input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
			</label>
			<span class="search-close">&times;</span>
		</div><!-- Site search end -->
	</div>
	<!--/ Container end -->

</div>
<!--/ Navigation end -->