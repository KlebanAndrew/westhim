<?php

namespace App\Http\Controllers;

use App\Enums\RouteName;
use App\Http\Requests\ContactAsStoreRequest;
use Illuminate\Http\RedirectResponse;

class NewsletterController extends Controller
{
	public function store(NewsletterStoreRequest $request): RedirectResponse
	{
		return response()->redirectToRoute(RouteName::HOME);
	}
}