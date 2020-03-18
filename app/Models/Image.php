<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Image
 * 
 * @property int $id
 * @property string $path
 * @property string $alt
 * @property string $deleted_at
 * 
 * @property Collection|Movie[] $movies
 *
 * @package App\Models
 */
class Image extends Model
{
	use SoftDeletes;
	protected $table = 'images';
	public $timestamps = false;

	protected $fillable = [
		'path',
		'alt'
	];

	public function movies()
	{
		return $this->belongsToMany(Movie::class, 'movie_images')
					->withPivot('id', 'deleted_at');
	}
}
