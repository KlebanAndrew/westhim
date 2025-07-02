<?php

namespace App\Http\Controllers;

use App\Enums\RouteName;
use App\Models\Service;
use App\Services\ServiceItemService;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ServiceController
{
	use SEOTools;

	public function __construct(protected ServiceItemService $serviceItemService)
	{
	}

	public function index(): View
	{
		$this->seo()
			->setTitle(trans('seo.services.title'))
			->setDescription(trans('seo.services.description'))
			->opengraph()->setUrl(LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(),
				route(RouteName::HOME)))
			->setType('website');

		$services = $this->serviceItemService->getListForLocalization(LaravelLocalization::getCurrentLocale(), 6);

		return view('pages.services', ['services' => $services]);
	}

	public function show(string $slug): View
	{
		$services = $this->serviceItemService->getListForLocalization(LaravelLocalization::getCurrentLocale());

		$service = $this->serviceItemService->getBySlug($slug);

		// SEO block
		$this->seo()
			->setTitle($service->singleText->seo_title)
			->setDescription($service->singleText->seo_description)
			->opengraph()->setUrl(LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(),
				route(RouteName::SERVICES_SINGLE, ['slug' => $service->slug])))
			->setType('website');

		if ($service->singleText?->seo_keywords) {
			$this->seo()->metatags()->setKeywords($service->singleText->seo_keywords);
		}

		return view('pages.services-single', ['service' => $service, 'services' => $services]);
	}
}
