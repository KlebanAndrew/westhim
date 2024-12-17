<?php

use App\Enums\RouteName;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::prefix(LaravelLocalization::setLocale())
	->middleware(['localeCookieRedirect', 'localizationRedirect', 'localeViewPath'])
	->group(function() {
	Route::get('/', function () {
		return view('index');
	});
	
	Route::get('/home', function () {
		return view('pages.home');
	})->name(RouteName::HOME);

	Route::get('/services', function () {
		return view('pages.services');
	})->name(RouteName::SERVICES);

	Route::get('/services-single', function () {
		return view('pages.services-single');
	})->name(RouteName::SERVICES_SINGLE);

	Route::get('/contact', function () {
		return view('pages.contact');
	})->name(RouteName::CONTACT);

	Route::get('/projects', function () {
		return view('pages.projects');
	})->name(RouteName::PROJECTS);

	Route::get('/projects-single', function () {
		return view('pages.projects-single');
	})->name(RouteName::PROJECTS_SINGLE);

	Route::get('/about', function () {
		return view('pages.about');
	})->name(RouteName::ABOUT);

	Route::get('/team', function () {
		return view('pages.team');
	})->name(RouteName::TEAM);

	Route::get('/faq', function () {
		return view('pages.faq');
	})->name(RouteName::FAQ);

	Route::get('/pricing', function () {
		return view('pages.pricing');
	})->name(RouteName::PRICING);

	Route::get('/testimonials', function () {
		return view('pages.testimonials');
	})->name(RouteName::TESTIMONIALS);

	Route::get('/not-found', function () {
		return view('errors.404');
	})->name(RouteName::NOT_FOUND);

	Route::get('/typography', function () {
		return view('pages.typography');
	})->name(RouteName::TYPOGRAPHY);

	Route::get('/news-single', function () {
		return view('pages.news-single');
	})->name(RouteName::NEWS_SINGLE);

	Route::get('/news-left-sidebar', function () {
		return view('pages.news-left-sidebar');
	})->name(RouteName::NEWS_LEFT_SIDEBAR);

	Route::get('/news-right-sidebar', function () {
		return view('pages.news-right-sidebar');
	})->name(RouteName::NEWS_RIGHT_SIDEBAR);
});

Route::post('/contact-us', [ContactUsController::class, 'store']);
Route::post('/newsletter', [NewsletterController::class, 'store']);
