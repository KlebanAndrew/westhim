<div class="site-navigation">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-expand-lg navbar-dark p-0">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div id="navbar-collapse" class="collapse navbar-collapse">
						<ul class="nav navbar-nav mr-auto">
							<li class="nav-item dropdown active">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li class="active"><a href="{{ route(\App\Enums\RouteName::HOME) }}">Home One</a></li>
									<li><a href="index-2.html">Home Two</a></li>
								</ul>
							</li>

							<li class="nav-item dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="{{ route(\App\Enums\RouteName::ABOUT) }}">About Us</a></li>
									<li><a href="{{ route(\App\Enums\RouteName::TEAM) }}">Our People</a></li>
									<li><a href="{{ route(\App\Enums\RouteName::TESTIMONIALS) }}">Testimonials</a></li>
									<li><a href="{{ route(\App\Enums\RouteName::FAQ) }}">Faq</a></li>
									<li><a href="{{ route(\App\Enums\RouteName::PRICING) }}">Pricing</a></li>
								</ul>
							</li>

							<li class="nav-item dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Projects <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="{{ route(\App\Enums\RouteName::PROJECTS) }}">Projects All</a></li>
									<li><a href="{{ route(\App\Enums\RouteName::PROJECTS_SINGLE) }}">Projects Single</a></li>
								</ul>
							</li>

							<li class="nav-item dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="{{ route(\App\Enums\RouteName::SERVICES) }}">Services All</a></li>
									<li><a href="{{ route(\App\Enums\RouteName::SERVICES_SINGLE) }}">Services Single</a></li>
								</ul>
							</li>

							<li class="nav-item dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="{{ route(\App\Enums\RouteName::TYPOGRAPHY) }}">Typography</a></li>
									<li><a href="{{ route(\App\Enums\RouteName::NOT_FOUND) }}">404</a></li>
									<li class="dropdown-submenu">
										<a href="#!" class="dropdown-toggle" data-toggle="dropdown">Parent Menu</a>
										<ul class="dropdown-menu">
											<li><a href="#!">Child Menu 1</a></li>
											<li><a href="#!">Child Menu 2</a></li>
											<li><a href="#!">Child Menu 3</a></li>
										</ul>
									</li>
								</ul>
							</li>

							<li class="nav-item dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">News <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="{{ route(\App\Enums\RouteName::NEWS_LEFT_SIDEBAR) }}">News Left Sidebar</a></li>
									<li><a href="{{ route(\App\Enums\RouteName::NEWS_RIGHT_SIDEBAR) }}">News Right Sidebar</a></li>
									<li><a href="{{ route(\App\Enums\RouteName::NEWS_SINGLE) }}">News Single</a></li>
								</ul>
							</li>

							<li class="nav-item"><a class="nav-link" href="{{ route(\App\Enums\RouteName::CONTACT) }}">Contact</a></li>
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