<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductText extends Model
{
	protected $table = 'product_texts';

	protected $fillable = [
		'product_id',
		'locale',
		'sku',
		'name',
		'description',
		'characteristics',
		'notes'
	];

	protected $casts = [
		'characteristics' => 'array',
		'notes' => 'array',
	];

	public function product(): BelongsTo
	{
		return $this->belongsTo(Product::class);
	}
}
