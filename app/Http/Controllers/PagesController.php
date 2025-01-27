<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class PagesController
{
	public function contact(): View
	{
		return view('pages.contact');
	}

	public function about(): View
	{
		return view('pages.about');
	}

	public function faq(): View
	{
		return view('pages.faq');
	}
}