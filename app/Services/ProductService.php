<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Collection;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ProductService
{
	public function getBySlug(string $slug): Product
	{
		return Product::where('slug', $slug)
			->with([
				'files',
				'singleText' => fn($query) => $query->where('locale', LaravelLocalization::getCurrentLocale()),
			])
			->firstOrFail();
	}

	public function getListOfRandomElementsForLocalization(string $locale, int $limit): Collection
	{
		return Product::query()
			->orderByRaw("RANDOM( )")
			->with([
				'files',
				'singleText' => fn($query) => $query->where('locale', $locale),
			])
			->limit($limit)
			->get();
	}

	public function getListForLocalization(string $locale): Collection
	{
		return Product::query()
			->with([
				'files',
				'singleText' => fn($query) => $query->where('locale', $locale),
			])
			->get();
	}

	public function getListWithoutTexts(): Collection
	{
		return Product::query()->get();
	}
}
