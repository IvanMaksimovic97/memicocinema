<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Actor
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
class Actor extends Model
{
	use SoftDeletes;
	protected $table = 'actors';
    public $timestamps = false;

	protected $fillable = [
		'first_name',
		'last_name'
	];

	public function movies()
	{
		return $this->belongsToMany(Movie::class, 'movie_actors')
					->withPivot('id', 'deleted_at');
	}
}
