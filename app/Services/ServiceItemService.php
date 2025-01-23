<?php

namespace App\Services;

use App\Models\Service;
use Illuminate\Support\Collection;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ServiceItemService
{
	public function getBySlug(string $slug): Service
	{
		return Service::where('slug', $slug)
			->with(['singleText' => fn($query) => $query->where('locale', LaravelLocalization::getCurrentLocale())])
			->firstOrFail();
	}

	public function getListForLocalization(string $locale): Collection
	{
		return Service::query()
			->with(['singleText' => fn($query) => $query->where('locale', $locale)])
			->get();
	}
}