<?php

namespace App\View\Components;

use App\Models\Service;
use App\Services\ProductService;
use App\Services\ServiceItemService;
use Illuminate\View\Component;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Menu extends Component
{
	public function __construct(
		protected ServiceItemService  $serviceItemService,
		protected ProductService  $productService
	)
	{
	}

	public function render(): View
	{
		$services = $this->serviceItemService->getListForLocalization(LaravelLocalization::getCurrentLocale());
		$products = $this->productService->getListForLocalization(LaravelLocalization::getCurrentLocale());

		return view('layouts.components.header.menu', ['services' => $services, 'products' => $products]);
	}
}