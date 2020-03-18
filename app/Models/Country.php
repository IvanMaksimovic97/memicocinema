<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Country
 * 
 * @property int $id
 * @property string $name
 * @property string $deleted_at
 * 
 * @property Collection|Movie[] $movies
 *
 * @package App\Models
 */
class Country extends Model
{
	use SoftDeletes;
	protected $table = 'countries';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function movies()
	{
		return $this->belongsToMany(Movie::class, 'movie_country')
					->withPivot('id', 'deleted_at');
	}
}
