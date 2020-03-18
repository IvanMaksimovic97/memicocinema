<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MovieCountry
 * 
 * @property int $id
 * @property int $movie_id
 * @property int $country_id
 * @property string $deleted_at
 * 
 * @property Movie $movie
 * @property Country $country
 *
 * @package App\Models
 */
class MovieCountry extends Model
{
	use SoftDeletes;
	protected $table = 'movie_country';
	public $timestamps = false;

	protected $casts = [
		'movie_id' => 'int',
		'country_id' => 'int'
	];

	protected $fillable = [
		'movie_id',
		'country_id'
	];

	public function movie()
	{
		return $this->belongsTo(Movie::class);
	}

	public function country()
	{
		return $this->belongsTo(Country::class);
	}
}
