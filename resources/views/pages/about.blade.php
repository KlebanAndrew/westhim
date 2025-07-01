@extends('layouts.app')

@section('content')
	@include(
	'sections.banner-area',
	 [
		 'title' => 'Про нас',
		 'breadcrumbItems' => [
			 ['title' => 'Домашня', 'link' => route(\App\Enums\RouteName::HOME)],
			 ['title' => 'Про нас', 'link' => ''],
		]
	 ]
	)
	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h3 class="column-title">Про нас</h3>
					<p>"ВЕСТХІМ" розміщене в мальовничому регіоні України – Прикарпатті, у м.Івано-Франківську, яке розташоване на південному заході України на відстані 150-300 км від кордонів Польщі, Румунії, Угорщини, Словаччини. Місто є обласним центром із значним промислово-економічним і науковим потенціалом та широкими можливостями для розвитку як внутрішніх міжрегіональних, так і зовнішніх міждержавних зв’язків.</p>
					<p>"ВЕСТХІМ" спеціалізується на проектуванні, виготовленні і ремонті механічних пресів зусиллям від 250 до 4000 кН відкритого і закритого типів, простої і подвійної дії, призначених для різноманітних операцій холодної штамповки. На нашому обладнанні можна проводити заготівельні,токарні, фрезерні, свердлильні, шліфувальні, зубооброблювальні, зварювальні, термічні і гальванічні роботи, можна виготовляти великогабаритні зварні конструкції і деталі машин та механізмів розмірами до 2х3х6 метрів і вагою до 35 тонн.</p>
					<p>"Станкосерт" (м. Одеса), технічний нагляд за сертифікованою продукцією здійснюється згідно з ліцензійною угодою. Замовники позитивно відзиваються про преса з товарною маркою “ВЕСТХІМ”, відмічають їх якість і виражають побажання на подальшу співпрацю.</p>

				</div><!-- Col end -->

				<div class="col-lg-6 mt-5 mt-lg-0">

					<div id="page-slider" class="page-slider small-bg">

						<div class="item" style="background-image:url(images/slider-pages/slide-page1.jpg)">
							<div class="container">
								<div class="box-slider-content">
									<div class="box-slider-text">
										<h2 class="box-slide-title">Професіоналізм</h2>
									</div>
								</div>
							</div>
						</div><!-- Item 1 end -->

						<div class="item" style="background-image:url(images/slider-pages/slide-page2.jpg)">
							<div class="container">
								<div class="box-slider-content">
									<div class="box-slider-text">
										<h2 class="box-slide-title">Якісний підхід</h2>
									</div>
								</div>
							</div>
						</div><!-- Item 1 end -->

						<div class="item" style="background-image:url(images/slider-pages/slide-page3.jpg)">
							<div class="container">
								<div class="box-slider-content">
									<div class="box-slider-text">
										<h2 class="box-slide-title">Відповідальність</h2>
									</div>
								</div>
							</div>
						</div><!-- Item 1 end -->
					</div><!-- Page slider end-->


				</div><!-- Col end -->
			</div><!-- Content row end -->

		</div><!-- Container end -->
	</section><!-- Main container end -->

	@include('sections.facts')
@endsection
