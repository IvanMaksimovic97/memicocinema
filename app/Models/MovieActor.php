<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MovieActor
 * 
 * @property int $id
 * @property int $movie_id
 * @property int $actor_id
 * @property string $deleted_at
 * 
 * @property Movie $movie
 * @property Actor $actor
 *
 * @package App\Models
 */
class MovieActor extends Model
{
	use SoftDeletes;
	protected $table = 'movie_actors';
	public $timestamps = false;

	protected $casts = [
		'movie_id' => 'int',
		'actor_id' => 'int'
	];

	protected $fillable = [
		'movie_id',
		'actor_id'
	];

	public function movie()
	{
		return $this->belongsTo(Movie::class);
	}

	public function actor()
	{
		return $this->belongsTo(Actor::class);
	}
}
