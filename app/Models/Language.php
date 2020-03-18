<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Language
 * 
 * @property int $id
 * @property string $name
 * @property string $deleted_at
 * 
 * @property Collection|Movie[] $movies
 *
 * @package App\Models
 */
class Language extends Model
{
	use SoftDeletes;
	protected $table = 'languages';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function movies()
	{
		return $this->belongsToMany(Movie::class, 'movie_language')
					->withPivot('id', 'deleted_at');
	}
}
