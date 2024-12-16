<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactAsStoreRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'name' => ['required', 'string'],
			'email' => ['required', 'email'],
			'subject' => ['nullable', 'string'],
			'message' => ['required', 'string'],
		];
	}
}