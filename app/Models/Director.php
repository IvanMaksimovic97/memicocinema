<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Director
 * 
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $deleted_at
 * 
 * @property Collection|Movie[] $movies
 *
 * @package App\Models
 */
class Director extends Model
{
	use SoftDeletes;
	protected $table = 'directors';
	public $timestamps = false;

	protected $fillable = [
		'first_name',
		'last_name'
	];

	public function movies()
	{
		return $this->belongsToMany(Movie::class, 'movie_directors')
					->withPivot('id', 'deleted_at');
	}
}
