<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Service;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ProductService
{
	public function getBySlug(string $slug): Service
	{
		return Product::where('slug', $slug)
			->with(['singleText' => fn($query) => $query->where('locale', LaravelLocalization::getCurrentLocale())])
			->firstOrFail();
	}

	public function getListOfRandomElementsForLocalization(string $locale, int $limit): Collection
	{
		return Product::query()
			->orderByRaw("RANDOM( )")
			->with(['singleText' => fn($query) => $query->where('locale', $locale)])
			->limit($limit)
			->get();
	}

	public function getListForLocalization(string $locale): Collection
	{
		return Product::query()
			->with(['singleText' => fn($query) => $query->where('locale', $locale)])
			->get();
	}
}
