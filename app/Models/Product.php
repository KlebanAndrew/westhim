<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * @property int                                                             $id
 * @property string                                                          $slug
 * @property string                                                          $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, ProductText> $texts
 * @property-read ProductText|null                                           $singleText
 * @property-read \Illuminate\Database\Eloquent\Collection<int, File>        $files
 */
class Product extends Model
{
	protected $table = 'products';

	protected $fillable = [
		'slug',
		'category',
	];

	public function texts(): HasMany
	{
		return $this->hasMany(ProductText::class);
	}

	public function singleText(): HasOne
	{
		return $this->hasOne(ProductText::class);
	}

	public function files(): MorphMany
	{
		return $this->morphMany(File::class, 'fileable');
	}
}