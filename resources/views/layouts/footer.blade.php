@php 
	use App\Enums\RouteName; 
	/** @var \Illuminate\Support\Collection<\App\Models\Service> $services */
@endphp
<footer id="footer" class="footer bg-overlay">
	<div class="footer-main">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-4 col-md-6 footer-widget footer-about">
					<h3 class="widget-title">{{ trans('menu.about_us') }}</h3>
					<img loading="lazy" class="footer-logo" src="{{ URL::asset('images/footer-logo.png') }}" alt="ВЕСТХІМ">
					<p>Виготовлення брикетувальних машин, пресів, сонячних батарей та каркасів.</p>
					<p>"ВЕСТХІМ" спеціалізується на проектуванні, виготовленні і ремонті механічних пресів зусиллям від 250 до 4000 кН відкритого і закритого типів, простої і подвійної дії, призначених для різноманітних операцій холодної штамповки.</p>
					<div class="footer-social">
						<ul>
							<li><a href="https://facebook.com/themefisher" aria-label="Facebook"><i
										class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://twitter.com/themefisher" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
							</li>
							<li><a href="https://instagram.com/themefisher" aria-label="Instagram"><i
										class="fab fa-instagram"></i></a></li>
							<li><a href="https://github.com/themefisher" aria-label="Github"><i class="fab fa-github"></i></a></li>
						</ul>
					</div><!-- Footer social end -->
				</div><!-- Col end -->

				<div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
					<h3 class="widget-title">Замовити калькуляцію</h3>
					<div class="working-hours">
						Телефонуйте за вказаними номерами  +38 (050) 33-86-509 або заповнюйте електронну форму онлайн і ми вам зателефонуємо самі.
						<br><br> Пн - Пт: <span class="text-right">10:00 - 16:00 </span>
						<br> Сб: <span class="text-right">12:00 - 15:00</span>
					</div>
				</div><!-- Col end -->

				<div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
					<h3 class="widget-title">{{ trans('general.our_services') }}</h3>
					<ul class="list-arrow">
						@foreach($services as $service)
							<li>
								<a href="{{ route(RouteName::SERVICES_SINGLE, ['slug' => $service->slug]) }}">{{ $service->singleText->short_title }}</a>
							</li>
						@endforeach
					</ul>
				</div><!-- Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</div><!-- Footer main end -->

	<div class="copyright">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-12">
					<div class="copyright-info text-center">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>, Designed &amp; Developed by <a href="https://whesthim.com.ua">Westhim</a></span>
					</div>
				</div>

				<div class="col-md-12">
					<div class="copyright-info text-center">
						<span>Distributed by <a href="https://whesthim.com.ua/">Westhim</a></span>
					</div>
				</div>

			</div><!-- Row end -->

			<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
				<button class="btn btn-primary" title="Back to Top">
					<i class="fa fa-angle-double-up"></i>
				</button>
			</div>

		</div><!-- Container end -->
	</div><!-- Copyright end -->
</footer><!-- Footer end -->