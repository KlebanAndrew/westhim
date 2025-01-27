<?php

namespace App\Http\Controllers;

use App\Services\ServiceItemService;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HomeController
{
	public function __construct(protected ServiceItemService  $serviceItemService)
	{
	}

	public function show(): View
	{
		$services = $this->serviceItemService->getListForLocalization(LaravelLocalization::getCurrentLocale());

		return view('pages.home', ['services' => $services]);
	}
}