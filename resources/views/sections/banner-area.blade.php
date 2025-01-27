<div id="banner-area" class="banner-area" style="background-image:url({{ URL::asset('images/banner/bg.jpg') }})">
	<div class="banner-text">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="banner-heading">
						<h1 class="banner-title">{{ $title }}</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb justify-content-center">
								@if ($breadcrumbItems)
									@foreach($breadcrumbItems as $breadcrumbItem)
										@if (!$loop->last)
											<li class="breadcrumb-item">
												<a href="{{ \Illuminate\Support\Arr::get($breadcrumbItem, 'link') }}">
													{{ \Illuminate\Support\Arr::get($breadcrumbItem, 'title') }}
												</a>
											</li>
										@else
											<li class="breadcrumb-item active" aria-current="page">
												{{ \Illuminate\Support\Arr::get($breadcrumbItem, 'title') }}
											</li>
										@endif
									@endforeach
								@endif
							</ol>
						</nav>
					</div>
				</div><!-- Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</div><!-- Banner text end -->
</div><!-- Banner area end --> 
