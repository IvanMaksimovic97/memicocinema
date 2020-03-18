<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MovieDirector
 * 
 * @property int $id
 * @property int $movie_id
 * @property int $director_id
 * @property string $deleted_at
 * 
 * @property Movie $movie
 * @property Director $director
 *
 * @package App\Models
 */
class MovieDirector extends Model
{
	use SoftDeletes;
	protected $table = 'movie_directors';
	public $timestamps = false;

	protected $casts = [
		'movie_id' => 'int',
		'director_id' => 'int'
	];

	protected $fillable = [
		'movie_id',
		'director_id'
	];

	public function movie()
	{
		return $this->belongsTo(Movie::class);
	}

	public function director()
	{
		return $this->belongsTo(Director::class);
	}
}
