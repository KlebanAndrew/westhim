<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Service;
use Illuminate\Support\Collection;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ServiceItemService
{
	public function getBySlug(string $slug): Service
	{
		return Service::where('slug', $slug)
			->with([
				'files',
				'singleText' => fn($query) => $query->where('locale', LaravelLocalization::getCurrentLocale()),
			])
			->firstOrFail();
	}

	public function getListForLocalization(string $locale, int $limit = null): Collection
	{
		return Service::query()
			->with([
				'files',
				'singleText' => fn($query) => $query->where('locale', $locale),
			])
			->when($limit !== null, function ($query) use ($limit) {
				$query->limit($limit);
			})
			->get();
	}

	public function getListWithoutTexts(): Collection
	{
		return Service::query()->get();
	}
}
