<?php

use App\Enums\RouteName;
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
