<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MovieShowTime
 * 
 * @property int $movie_id
 * @property int $show_time_id
 * 
 * @property Movie $movie
 * @property ShowTime $show_time
 *
 * @package App\Models
 */
class MovieShowTime extends Model
{
	protected $table = 'movie_show_times';
	protected $primaryKey = 'show_time_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'movie_id' => 'int',
		'show_time_id' => 'int'
	];

	protected $fillable = [
		'movie_id'
	];

	public function movie()
	{
		return $this->belongsTo(Movie::class);
	}

	public function show_time()
	{
		return $this->belongsTo(ShowTime::class);
	}
}
