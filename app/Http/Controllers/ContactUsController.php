<?php

namespace App\Http\Controllers;

use App\Enums\RouteName;
use App\Http\Requests\ContactAsStoreRequest;
use App\Mail\ContactUs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
	public function store(ContactAsStoreRequest $request): RedirectResponse
	{
		try {
			Mail::to(config('mail.from.address'))
				->send(new ContactUs(
					name: $request->input('name'),
					email: $request->input('email'),
					customMessage: $request->input('message'),
					customSubject: $request->input('subject')
				));
		} catch (\Exception $e) {
		}

		return response()->redirectToRoute(RouteName::CONTACT_SUCCESS);
	}
}
