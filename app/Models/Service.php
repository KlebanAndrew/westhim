<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * @property int $id
 * @property string $slug
 * @property-read Collection<int, ServiceText> $texts
 * @property-read ServiceText|null $singleText
 * @property-read Collection<int, File> $files
 */
class Service extends Model
{
	protected $table = 'services';
	
	protected $fillable = [
		'slug',
	];

	public function texts(): HasMany
	{
		return $this->hasMany(ServiceText::class);
	}

	public function singleText(): HasOne
	{
		return $this->hasOne(ServiceText::class);
	}

	public function files(): MorphMany
	{
		return $this->morphMany(File::class, 'fileable');
	}
}
