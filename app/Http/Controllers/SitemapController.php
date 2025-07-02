<?php

namespace App\Http\Controllers;

use App\Services\SitemapService;
use Illuminate\Http\Request;

class SitemapController
{
	public function __construct(protected SitemapService $sitemapService)
	{
	}

	/**
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function sitemap(Request $request)
	{
		$sitemap = $this->sitemapService->generateSitemap();

		return $sitemap->toResponse($request);
	}
}