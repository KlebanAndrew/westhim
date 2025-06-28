@php 
	use App\Enums\RouteName;
 /** @var \Illuminate\Support\Collection<\App\Models\Service> $services */
 /** @var \Illuminate\Support\Collection<\App\Models\Product> $products */
 @endphp
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
							<li class="nav-item @if(Route::currentRouteName() === RouteName::HOME) active @endif"><a
									class="nav-link"
									href="{{ route(RouteName::HOME) }}">{{ trans('menu.home') }}</a>
							</li>

							<li class="nav-item dropdown @if(Route::currentRouteName() === RouteName::PRODUCTS || Route::currentRouteName() === RouteName::PRODUCTS_SINGLE) active @endif">
								<a href="{{ route(RouteName::PRODUCTS) }}"
								   class="nav-link dropdown-toggle"
								>{{ trans('menu.products') }} <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									@foreach($products as $product)
										<li>
											<a href="{{ route(RouteName::PRODUCTS_SINGLE, ['slug' => $product->slug]) }}">{{ $product->singleText->short_title }}</a>
										</li>
									@endforeach
								</ul>
							</li>
			
							<li class="nav-item dropdown @if(Route::currentRouteName() === RouteName::SERVICES || Route::currentRouteName() === RouteName::SERVICES_SINGLE) active @endif">
								<a href="{{ route(RouteName::SERVICES) }}"
								   class="nav-link dropdown-toggle"
								>{{ trans('menu.services') }} <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									@foreach($services as $service)
										<li>
											<a href="{{ route(RouteName::SERVICES_SINGLE, ['slug' => $service->slug]) }}">{{ $service->singleText->name }}</a>
										</li>
									@endforeach
								</ul>
							</li>

							<li class="nav-item @if(Route::currentRouteName() === RouteName::FAQ) active @endif">
								<a class="nav-link" href="{{ route(RouteName::FAQ) }}">{{ trans('menu.faq') }}</a>
							</li>

							<li class="nav-item @if(Route::currentRouteName() === RouteName::CONTACT) active @endif">
								<a class="nav-link" href="{{ route(RouteName::CONTACT) }}">{{ trans('menu.contact') }}</a>
							</li>

							<li class="nav-item @if(Route::currentRouteName() === RouteName::ABOUT) active @endif">
								<a class="nav-link" href="{{ route(RouteName::ABOUT) }}">{{ trans('menu.about_us') }}</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<!--/ Col end -->
		</div>
		<!--/ Row end -->
	</div>
	<!--/ Container end -->

</div>
<!--/ Navigation end -->
