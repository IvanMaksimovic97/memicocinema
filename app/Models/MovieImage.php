<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MovieImage
 * 
 * @property int $id
 * @property int $movie_id
 * @property int $image_id
 * @property string $deleted_at
 * 
 * @property Movie $movie
 * @property Image $image
 *
 * @package App\Models
 */
class MovieImage extends Model
{
	use SoftDeletes;
	protected $table = 'movie_images';
	public $timestamps = false;

	protected $casts = [
		'movie_id' => 'int',
		'image_id' => 'int'
	];

	protected $fillable = [
		'movie_id',
		'image_id'
	];

	public function movie()
	{
		return $this->belongsTo(Movie::class);
	}

	public function image()
	{
		return $this->belongsTo(Image::class);
	}
}
