<section class="subscribe no-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="subscribe-call-to-acton">
					<h3>{!! trans('pages.home.subscribe.call_to_us') !!}</h3>
					{!! trans('pages.home.subscribe.phone') !!}
				</div>
			</div><!-- Col end -->

			<div class="col-lg-8">
				<div class="ts-newsletter row align-items-center">
					<div class="col-md-5 newsletter-introtext">
						<h4 class="text-white mb-0">{!! trans('pages.home.subscribe.call_to_us') !!}</h4>
						<a href="mailto:info@westhim.com" class="text-white">info@westhim.com</a>
					</div>

					<div class="col-md-7 newsletter-form">
						<form action="/subscribe" method="post">
							<div class="form-group">
								<label for="newsletter-email" class="content-hidden">{{ trans('pages.home.subscribe.leave_email') }}</label>
								<input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="Напишіть емейл і натисніть enter" autocomplete="off">
							</div>
						</form>
					</div>
				</div><!-- Newsletter end -->
			</div><!-- Col end -->

		</div><!-- Content row end -->
	</div>
	<!--/ Container end -->
</section>
<!--/ subscribe end -->