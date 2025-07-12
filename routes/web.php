<?php

use App\Enums\RouteName;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SEOController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::prefix(LaravelLocalization::setLocale())
	->middleware(['localeCookieRedirect', 'localizationRedirect', 'localeViewPath'])
	->group(function() {

	Route::get('/', [HomeController::class, 'show']);
	Route::get('/home', [HomeController::class, 'show'])->name(RouteName::HOME);

	Route::get('/services', [ServiceController::class, 'index'])->name(RouteName::SERVICES);
	Route::get('/services/{slug}', [ServiceController::class, 'show'])->name(RouteName::SERVICES_SINGLE);

	Route::get('/products', [ProductController::class, 'index'])->name(RouteName::PRODUCTS);
	Route::get('/products/{slug}', [ProductController::class, 'show'])->name(RouteName::PRODUCTS_SINGLE);

	Route::get('/contact', [PagesController::class, 'contact'])->name(RouteName::CONTACT);
	Route::get('/contact-success', [PagesController::class, 'feedback'])->name(RouteName::CONTACT_SUCCESS);
	Route::get('/about', [PagesController::class, 'about'])->name(RouteName::ABOUT);
	Route::get('/faq', [PagesController::class, 'faq'])->name(RouteName::FAQ);

	Route::get('/not-found', function () {
		return view('errors.404');
	})->name(RouteName::NOT_FOUND);
});

Route::get('/sitemap.xml', [SitemapController::class, 'sitemap'])->name(RouteName::SITEMAP);
Route::get('/robots.txt', [SEOController::class, 'robots'])->name(RouteName::ROBOTS);
Route::post('/contact-us', [ContactUsController::class, 'store']);
Route::post('/newsletter', [NewsletterController::class, 'store']);
