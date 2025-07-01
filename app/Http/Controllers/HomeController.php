<?php

namespace App\Http\Controllers;

use App\Enums\RouteName;
use App\Services\ProductService;
use App\Services\ServiceItemService;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HomeController
{
	use SEOTools;

	public function __construct(
		protected ServiceItemService  $serviceItemService,
		protected ProductService $productService,
	)
	{}

	public function show(): View
	{
		$this->seo()
			->setTitle(trans('seo.home.title'))
			->setDescription(trans('seo.home.description'))
			->opengraph()->setUrl(LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), route(RouteName::HOME)))
			->setType('website');
		$this->seo()->metatags()->setKeywords(trans('seo.home.keywords'));

		$services = $this->serviceItemService->getListForLocalization(LaravelLocalization::getCurrentLocale());
		$products = $this->productService->getListOfRandomElementsForLocalization(LaravelLocalization::getCurrentLocale(), 6);
		$categories = $products->pluck('category');

		return view('pages.home', ['services' => $services, 'products' => $products, 'categories' => $categories]);
	}
}
