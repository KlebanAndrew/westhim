<?php

namespace App\Http\Controllers;

use App\Enums\RouteName;
use App\Http\Requests\ContactAsStoreRequest;
use Illuminate\Http\RedirectResponse;

class ContactUsController extends Controller
{
	public function store(ContactAsStoreRequest $request): RedirectResponse
	{
		return response()->redirectToRoute(RouteName::CONTACT);
	}
}
