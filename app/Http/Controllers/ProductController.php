<?php

namespace App\Http\Controllers;

use App\Enums\ProductCategory;
use App\Enums\RouteName;
use App\Services\PageService;
use App\Services\ProductService;
use App\Services\ServiceItemService;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ProductController
{
	use SEOTools;

	public function __construct(
		protected ProductService $productService,
		protected PageService $pageService,
	) {
	}

	public function index(): View
	{
		$page = $this->pageService->getBySlug('products');
		$products = $this->productService->getListForLocalization(LaravelLocalization::getCurrentLocale());

		// SEO block
		$this->seo()
			->setTitle(trans('seo.products.title'))
			->setDescription(trans('seo.products.description'))
			->opengraph()->setUrl(LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(),
				route(RouteName::PRODUCTS)))
			->setType('website');

		return view('pages.products', ['products' => $products, 'page' => $page]);
	}

	public function show(string $slug): View
	{
		$products = $this->productService->getListForLocalization(LaravelLocalization::getCurrentLocale());
		$product = $this->productService->getBySlug($slug);

		// SEO block
		$this->seo()
			->setTitle($product->singleText->seo_title)
			->setDescription($product->singleText->seo_description)
			->opengraph()->setUrl(LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(),
				route(RouteName::PRODUCTS_SINGLE, ['slug' => $product->slug])))
			->setType('website');

		if ($product->singleText?->seo_keywords) {
			$this->seo()->metatags()->setKeywords($product->singleText->seo_keywords);
		}

		return view('pages.product-single', ['product' => $product, 'products' => $products]);
	}
}
