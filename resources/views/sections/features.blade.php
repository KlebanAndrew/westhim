<section id="ts-features" class="ts-features">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="ts-intro">
					<h2 class="into-title">{{ trans('pages.home.features.advantages') }}</h2>
					<h3 class="into-sub-title">{{ trans('pages.home.features.our_advantages') }}</h3>
					<p></p>
				</div><!-- Intro box end -->

				<div class="gap-20"></div>

				<div class="row">
					<div class="col-md-6">
						<div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-trophy"></i>
                    </span>
							<div class="ts-service-box-content">
								<h3 class="service-box-title">{{ trans('pages.home.features.quality') }}</h3>
							</div>
						</div><!-- Service 1 end -->
					</div><!-- col end -->

					<div class="col-md-6">
						<div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-sliders-h"></i>
                    </span>
							<div class="ts-service-box-content">
								<h3 class="service-box-title">{{ trans('pages.home.features.qa') }}</h3>
							</div>
						</div><!-- Service 2 end -->
					</div><!-- col end -->
				</div><!-- Content row 1 end -->

				<div class="row">
					<div class="col-md-6">
						<div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-thumbs-up"></i>
                    </span>
							<div class="ts-service-box-content">
								<h3 class="service-box-title">{{ trans('pages.home.features.consulting') }}</h3>
							</div>
						</div><!-- Service 1 end -->
					</div><!-- col end -->

					<div class="col-md-6">
						<div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-users"></i>
                    </span>
							<div class="ts-service-box-content">
								<h3 class="service-box-title">{{ trans('pages.home.features.staff') }}</h3>
							</div>
						</div><!-- Service 2 end -->
					</div><!-- col end -->
				</div><!-- Content row 1 end -->
			</div><!-- Col end -->

			<div class="col-lg-6 mt-4 mt-lg-0">
				<h3 class="into-sub-title">{{ trans('pages.home.features.we_offer') }}</h3>
				<p>{{ trans('pages.home.features.we_offer_description') }}</p>

				<div class="accordion accordion-group" id="our-values-accordion">
					<div class="card">
						<div class="card-header p-0 bg-transparent" id="headingOne">
							<h2 class="mb-0">
								<button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									{{ trans('pages.home.features.for_organizations') }}
								</button>
							</h2>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
							<div class="card-body">
								<ul class="list-arrow">
									<li>Проектним Організаціям</li>
									<li>{{ trans('pages.home.features.for_organizations_list.2') }}</li>
									<li>{{ trans('pages.home.features.for_organizations_list.3') }}</li>
									<li>{{ trans('pages.home.features.for_organizations_list.4') }}</li>
									<li>{{ trans('pages.home.features.for_organizations_list.5') }}</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header p-0 bg-transparent" id="headingTwo">
							<h2 class="mb-0">
								<button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									{{ trans('pages.home.features.product_organizations') }}
								</button>
							</h2>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
							<div class="card-body">
								<ul class="list-arrow">
									<li>{{ trans('pages.home.features.product_organizations_list.1') }}</li>
									<li>{{ trans('pages.home.features.product_organizations_list.2') }}</li>
									<li>{{ trans('pages.home.features.product_organizations_list.3') }}</li>
									<li>{{ trans('pages.home.features.product_organizations_list.4') }}</li>
									<li>{{ trans('pages.home.features.product_organizations_list.5') }}</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header p-0 bg-transparent" id="headingThree">
							<h2 class="mb-0">
								<button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									{{ trans('pages.home.features.investors') }}
								</button>
							</h2>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">
							<div class="card-body">
								<ul class="list-arrow">
									<li>{{ trans('pages.home.features.investors_list.1') }}</li>
									<li>{{ trans('pages.home.features.investors_list.2') }}</li>
									<li>{{ trans('pages.home.features.investors_list.3') }}</li>
									<li>{{ trans('pages.home.features.investors_list.4') }}</li>
									<li>{{ trans('pages.home.features.investors_list.5') }}</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--/ Accordion end -->

			</div><!-- Col end -->
		</div><!-- Row end -->
	</div><!-- Container end -->
</section><!-- Feature are end -->