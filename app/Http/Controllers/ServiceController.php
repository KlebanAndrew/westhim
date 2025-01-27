<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Services\ServiceItemService;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ServiceController
{
	public function __construct(protected ServiceItemService  $serviceItemService)
	{
	}

	public function index(): View
	{
		$services = $this->serviceItemService->getListForLocalization(LaravelLocalization::getCurrentLocale(), 6);

		return view('pages.services', ['services' => $services]);
	}

	public function show(string $slug): View
	{
		$services = $this->serviceItemService->getListForLocalization(LaravelLocalization::getCurrentLocale());
		
		$service = $this->serviceItemService->getBySlug($slug);
		
		return view('pages.services-single', ['service' => $service, 'services' => $services]);
	}
}
