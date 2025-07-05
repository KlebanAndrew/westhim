<?php

namespace App\Http\Controllers;

use App\Enums\RouteName;
use App\Services\PageService;
use App\Services\ProductService;
use App\Services\ServiceItemService;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HomeController
{
	use SEOTools;

	public function __construct(
		protected ServiceItemService $serviceItemService,
		protected ProductService $productService,
		protected PageService $pageService,
	) {
	}

	public function show(): View
	{
		$page = $this->pageService->getBySlug('home');

		$this->seo()
			->setTitle($page->singleText?->seo_title)
			->setDescription($page->singleText?->seo_description)
			->opengraph()->setUrl(LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(),
				route(RouteName::HOME)))
			->setType('website');
		$this->seo()->metatags()->setKeywords(trans('seo.home.keywords'));

		$services = $this->serviceItemService->getListForLocalization(LaravelLocalization::getCurrentLocale());
		$products = $this->productService->getListOfRandomElementsForLocalization(LaravelLocalization::getCurrentLocale(),
			6);
		$categories = $products->pluck('category');

		return view('pages.home', [
			'services' => $services,
			'products' => $products,
			'categories' => $categories,
			'page' => $page,
		]);
	}
}
