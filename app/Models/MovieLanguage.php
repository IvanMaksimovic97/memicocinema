<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MovieLanguage
 * 
 * @property int $id
 * @property int $movie_id
 * @property int $language_id
 * @property string $deleted_at
 * 
 * @property Movie $movie
 * @property Language $language
 *
 * @package App\Models
 */
class MovieLanguage extends Model
{
	use SoftDeletes;
	protected $table = 'movie_language';
	public $timestamps = false;

	protected $casts = [
		'movie_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'movie_id',
		'language_id'
	];

	public function movie()
	{
		return $this->belongsTo(Movie::class);
	}

	public function language()
	{
		return $this->belongsTo(Language::class);
	}
}
