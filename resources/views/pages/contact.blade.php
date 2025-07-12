@extends('layouts.app')

@section('content')
	@include(
	'sections.banner-area',
	 [
		 'title' => 'Контакти',
		 'breadcrumbItems' => [
			 ['title' => 'Домашня', 'link' => route(\App\Enums\RouteName::HOME)],
			 ['title' => 'Контакти', 'link' => ''],
		]
	 ]
	)

	<section id="main-container" class="main-container">
		<div class="container">

			<div class="row text-center">
				<div class="col-12">
					<h2 class="section-title">Наші контакти</h2>
					<h3 class="section-sub-title">Зв'язатися з нами</h3>
				</div>
			</div>
			<!--/ Title row end -->

			<div class="row">
				<div class="col-md-4">
					<div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fas fa-map-marker-alt mr-0"></i>
          </span>
						<div class="ts-service-box-content">
							<h4>Наша адреса</h4>
							<p>Україна, 76495, м. Івано – Франківськ вул. Автоливмашівська1Б</p>
						</div>
					</div>
				</div><!-- Col 1 end -->

				<div class="col-md-4">
					<div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-envelope mr-0"></i>
          </span>
						<div class="ts-service-box-content">
							<h4>Емейл</h4>
							<p>info@westhim.com</p>
						</div>
					</div>
				</div><!-- Col 2 end -->

				<div class="col-md-4">
					<div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-phone-square mr-0"></i>
          </span>
						<div class="ts-service-box-content">
							<h4>Телефон</h4>
							<p>+38 099 20-24-697</p>
						</div>
					</div>
				</div><!-- Col 3 end -->

			</div><!-- 1st row end -->

			<div class="gap-60"></div>

			<div class="google-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.6109201220097!2d24.737579215903743!3d48.88469330680805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4730c40b0c808345%3A0x1b492ebe2b5adb32!2z0YPQuy4g0JDQstGC0L7Qu9C40LLQvNCw0YjQtdCy0YHQutCw0Y8sINCl0YDQuNC_0LvQuNC9LCDQmNCy0LDQvdC-LdCk0YDQsNC90LrQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsIDc2NDk1!5e0!3m2!1sru!2sua!4v1547723675964" width="100%" height="610px" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

			<div class="gap-40"></div>

			<div class="row">
				<div class="col-md-12">
					<h3 class="column-title">Зв'язатись з нами</h3>
					<form id="contact-form" action="/contact-us" method="post" role="form">
						<div class="error-container"></div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Ім'я</label>
									<input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Емейл</label>
									<input class="form-control form-control-email" name="email" id="email" placeholder="" type="email"
										   required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Телефон</label>
									<input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Повідомлення</label>
							<textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10"
									  required></textarea>
						</div>
						<div class="text-right"><br>
							<input type="hidden" name="_token" value="{{ csrf_token() }}" />
							<button class="btn btn-primary solid blank" type="submit">Надіслати</button>
						</div>
					</form>
				</div>

			</div><!-- Content row -->
		</div><!-- Conatiner end -->
	</section><!-- Main container end -->
@endsection
