<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FeaturedFilm
 * 
 * @property int $id
 * @property int $movie_id
 * @property string $deleted_at
 * 
 * @property Movie $movie
 *
 * @package App\Models
 */
class FeaturedFilm extends Model
{
	use SoftDeletes;
	protected $table = 'featured_films';
	public $timestamps = false;

	protected $casts = [
		'movie_id' => 'int'
	];

	protected $fillable = [
		'movie_id'
	];

	public function movie()
	{
		return $this->belongsTo(Movie::class);
	}
}
