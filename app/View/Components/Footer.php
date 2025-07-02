<?php

namespace App\View\Components;

use App\Models\Service;
use App\Services\ServiceItemService;
use Illuminate\View\Component;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Footer extends Component
{
	public function __construct(protected ServiceItemService $serviceItemService)
	{
	}

	public function render(): View
	{
		$services = $this->serviceItemService->getListForLocalization(LaravelLocalization::getCurrentLocale());

		return view('layouts.footer', ['services' => $services]);
	}
}
