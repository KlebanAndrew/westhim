<?php

namespace App\Http\Controllers;

use App\Enums\RouteName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response as ResponseFacade;
use Symfony\Component\HttpFoundation\Response;

class SEOController
{
	public function robots(Request $request): Response
	{
		$content = Cache::remember('robots.txt', now()->addMonth(), function () use ($request) {
			$lines = [
				'User-agent: *',
			];

			$siteUrl = route(RouteName::SITEMAP);

			$lines[] = 'Disallow:';
			$lines[] = 'Sitemap: ' . $siteUrl;

			return implode("\n", $lines);
		});

		return ResponseFacade::make($content, Response::HTTP_OK, ['Content-Type' => 'text/plain']);
	}
}