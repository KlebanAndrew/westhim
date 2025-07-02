<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int                                               $id
 * @property int                                               $product_id
 * @property string                                            $locale
 * @property string                                            $short_title
 * @property string                                            $title
 * @property string                                            $description
 * @property array<string, array{title: string, text: string}> $sections
 * @property array<string>                                     $seo_keywords
 * @property string                                            $seo_title
 * @property string                                            $seo_description
 * @property-read Product                                      $product
 */
class ProductText extends Model
{
	protected $table = 'product_texts';

	protected $fillable = [
		'product_id',
		'locale',
		'short_title',
		'title',
		'description',
		'sections',
		'seo_title',
		'seo_description',
		'seo_keywords',
	];

	protected $casts = [
		'sections' => 'array',
		'seo_keywords' => 'array',
	];

	public function product(): BelongsTo
	{
		return $this->belongsTo(Product::class);
	}
}
