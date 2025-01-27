<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use App\Services\ServiceItemService;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HomeController
{
	public function __construct(
		protected ServiceItemService  $serviceItemService,
		protected ProductService $productService,
	)
	{}

	public function show(): View
	{
		$services = $this->serviceItemService->getListForLocalization(LaravelLocalization::getCurrentLocale());
		$products = $this->productService->getListOfRandomElementsForLocalization(LaravelLocalization::getCurrentLocale(), 6);
		$categories = $products->pluck('category');

		return view('pages.home', ['services' => $services, 'products' => $products, 'categories' => $categories]);
	}
}
