<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class File extends Model
{
	protected $table = 'files';

	protected $fillable = [
		'path',
		'type',
		'alter_text',
	];

	public function fileable(): MorphTo
	{
		return $this->morphTo();
	}
}
