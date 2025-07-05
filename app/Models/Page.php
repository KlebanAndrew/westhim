<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * @property int                                                          $id
 * @property string                                                       $slug
 * @property-read \Illuminate\Database\Eloquent\Collection<int, PageText> $texts
 * @property-read ProductText|null                                        $singleText
 * @property-read \Illuminate\Database\Eloquent\Collection<int, File>     $files
 */
class Page extends Model
{
	protected $table = 'pages';

	protected $fillable = [
		'slug',
	];

	public function texts(): HasMany
	{
		return $this->hasMany(PageText::class);
	}

	public function singleText(): HasOne
	{
		return $this->hasOne(PageText::class);
	}

	public function files(): MorphMany
	{
		return $this->morphMany(File::class, 'fileable');
	}
}
