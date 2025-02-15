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

	public function index(): View
	{
		$products = $this->productService->getListForLocalization(LaravelLocalization::getCurrentLocale());
		$categories = $products->unique('category')->pluck('category');

		return view('pages.projects', ['products' => $products, 'categories' => $categories]);
	}

	public function show(string $slug): View
	{
		$product = $this->productService->getBySlug($slug);

		return view('pages.projects-single', ['product' => $product]);
	}
}
