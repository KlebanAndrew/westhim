<?php

namespace App\Http\Controllers;

use App\Enums\ProductCategory;
use App\Services\ProductService;
use App\Services\ServiceItemService;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ProductController
{
	public function __construct(protected ProductService  $productService)
	{
	}

	public function index()
	{
		$products = $this->productService->getListForLocalization(LaravelLocalization::getCurrentLocale());
		$categories = $products->pluck('category');

		return view('pages.projects', ['products' => $products, 'categories' => $categories]);
	}

	public function show(string $slug): View
	{
		$products = $this->productService->getListOfRandomElementsForLocalization(LaravelLocalization::getCurrentLocale(), 6);

		$product = $this->productService->getBySlug($slug);
		$categories = ProductCategory::values();

		return view('pages.projects-single', ['product' => $product, 'products' => $products, 'categories' => $categories]);
	}
}