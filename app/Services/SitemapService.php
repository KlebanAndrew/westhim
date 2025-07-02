<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapService
{
	public function __construct(
		protected ProductService $productService,
		protected ServiceItemService $serviceItemService
	) {
	}

	public function generateSitemap(): Sitemap
	{
		$sitemap = Sitemap::create();

		// Add static URLs
		$sitemap->add('/')
			->add('/home')
			->add('/services')
			->add('/products')
			->add('/about')
			->add('/contact')
			->add('/faq')
			->add('/not-found');

		// Add dynamic URLs (example)
		/** @var Collection<Product> $products */
		$products = $this->productService->getListWithoutTexts();

		foreach ($products as $product) {
			$sitemap->add(Url::create("/products/{$product->slug}")
				->setLastModificationDate(Carbon::parse($product->updated_at))
				->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
				->setPriority(0.8));
		}

		/** @var Collection<Service> $services */
		$services = $this->serviceItemService->getListWithoutTexts();

		foreach ($services as $service) {
			$sitemap->add(Url::create("/services/{$service->slug}")
				->setLastModificationDate(Carbon::parse($service->updated_at))
				->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
				->setPriority(0.8));
		}

		return $sitemap;
	}
}