<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceText extends Model
{
	protected $table = 'service_texts';
	
	protected $fillable = [
		'service_id',
		'locale',
		'name',
		'description',
		'characteristics',
		'prices'
	];
	
	protected $casts = [
		'characteristics' => 'array',
		'prices' => 'array',
	];

	public function service(): BelongsTo
	{
		return $this->belongsTo(Service::class);
	}
}
