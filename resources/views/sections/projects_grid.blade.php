<div class="row">
	<div class="col-12">
		<div class="shuffle-btn-group">
			<label class="active" for="all">
				<input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Всі
			</label>
			@foreach($categories as $category)
				<label for="{{ $category }}">
					<input type="radio" name="shuffle-filter" id="{{ $category  }}"
						   value="{{ $category }}">{{ trans("product-categories.$category") }}
				</label>
			@endforeach
		</div><!-- project filter end -->


		<div class="row shuffle-wrapper">
			<div class="col-1 shuffle-sizer"></div>

			@foreach($products as $product)
				<div class="col-lg-4 col-md-6 shuffle-item"
					 data-groups="[&quot;{{ $product->category }}&quot;]">
					<div class="project-img-container">
						<a class="gallery-popup" href="{{ URL::asset('images/products/kc_3537/kc3537.jpg') }}">
							<img class="img-fluid" src="{{ URL::asset('images/products/kc_3537/kc3537.jpg') }}"
								 alt="project-image">
							<span class="gallery-icon"><i class="fa fa-plus"></i></span>
						</a>
						<div class="project-item-info">
							<div class="project-item-info-content">
								<h3 class="project-item-title">
									<a href="{{ route(\App\Enums\RouteName::PRODUCTS_SINGLE, ['slug' => $product->slug]) }}">{{ $product->singleText->name }}</a>
								</h3>
								<p class="project-cat">{{ trans("product-categories.$product->category") }}</p>
							</div>
						</div>
					</div>
				</div><!-- shuffle item 1 end -->
			@endforeach
		</div><!-- shuffle end -->
	</div>

	@if (isset($show_all_button) && $show_all_button)
		<div class="col-12">
			<div class="general-btn text-center">
				<a class="btn btn-primary" href="{{ route(\App\Enums\RouteName::PRODUCTS) }}">Переглянути всі продукти</a>
			</div>
		</div>
	@endif
</div><!-- Content row end -->