<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MovieGenre
 * 
 * @property int $id
 * @property int $movie_id
 * @property int $genre_id
 * @property string $deleted_at
 * 
 * @property Genre $genre
 * @property Movie $movie
 *
 * @package App\Models
 */
class MovieGenre extends Model
{
	use SoftDeletes;
	protected $table = 'movie_genre';
	public $timestamps = false;

	protected $casts = [
		'movie_id' => 'int',
		'genre_id' => 'int'
	];

	protected $fillable = [
		'movie_id',
		'genre_id'
	];

	public function genre()
	{
		return $this->belongsTo(Genre::class);
	}

	public function movie()
	{
		return $this->belongsTo(Movie::class);
	}
}
