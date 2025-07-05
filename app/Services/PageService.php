<?php

namespace App\Services;

use App\Models\Page;
use App\Models\Product;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class PageService
{
	public function getBySlug(string $slug): Page
	{
		return Page::where('slug', $slug)
			->with([
				'files',
				'singleText' => fn($query) => $query->where('locale', LaravelLocalization::getCurrentLocale()),
			])
			->firstOrFail();
	}
}