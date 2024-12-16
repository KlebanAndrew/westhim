<?php

use App\Enums\RouteName;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

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

Route::post('/contact-us', [ContactUsController::class, 'store']);
Route::post('/newsletter', [NewsletterController::class, 'store']);
