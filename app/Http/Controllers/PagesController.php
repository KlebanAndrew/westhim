<?php

namespace App\Http\Controllers;

use App\Enums\RouteName;
use App\Services\PageService;
use App\Services\ProductService;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class PagesController
{
	use SEOTools;

	public function __construct(
		protected ProductService $productService,
		protected PageService $pageService
	) {
	}

	public function contact(): View
	{
		return view('pages.contact');
	}

	public function about(): View
	{
		$page = $this->pageService->getBySlug('about');
		$this->seo()
			->setTitle($page->singleText?->seo_title)
			->setDescription($page->singleText?->seo_description)
			->opengraph()->setUrl(LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(),
				route(RouteName::ABOUT)))
			->setType('website');

		return view('pages.about', ['page' => $page]);
	}

	public function faq(): View
	{
		$products = $this->productService->getListOfRandomElementsForLocalization(LaravelLocalization::getCurrentLocale(),
			3);

		return view('pages.faq', ['products' => $products]);
	}
}