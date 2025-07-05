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
 * @property-read Page                                         $page
 */
class PageText extends Model
{
	protected $table = 'page_texts';

	protected $fillable = [
		'page_id',
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

	public function page(): BelongsTo
	{
		return $this->belongsTo(Page::class);
	}
}
