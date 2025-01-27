<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;

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

	public function image(): MorphMany
	{
		return $this->morphMany(File::class, 'fileable');
	}
}
