<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * Class File
 *
 * Represents a file that can be associated with various models.
 *
 * @property int                                      $id
 * @property string                                   $path
 * @property string                                   $type
 * @property string|null                              $alter_text
 * @property-read \Illuminate\Database\Eloquent\Model $fileable
 */
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
