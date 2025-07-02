<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use App\Services\ServiceItemService;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class PagesController
{
	public function __construct(
		protected ProductService $productService
	) {
	}

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
		$products = $this->productService->getListOfRandomElementsForLocalization(LaravelLocalization::getCurrentLocale(),
			3);

		return view('pages.faq', ['products' => $products]);
	}
}