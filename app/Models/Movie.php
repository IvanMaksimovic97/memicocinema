<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Movie
 *
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * @property string $title
 * @property Carbon $release_date
 * @property int $duration_mins
 * @property string $description
 *
 * @property Collection|FeaturedFilm[] $featured_films
 * @property Collection|Actor[] $actors
 * @property Collection|Country[] $countries
 * @property Collection|Director[] $directors
 * @property Collection|Genre[] $genres
 * @property Collection|Image[] $images
 * @property Collection|Language[] $languages
 * @property Collection|ShowTime[] $show_times
 *
 * @package App\Models
 */
class Movie extends Model
{
	use SoftDeletes;
	protected $table = 'movies';

	protected $casts = [
		'duration_mins' => 'int'
	];

	protected $dates = [
		'release_date'
	];

	protected $fillable = [
		'title',
		'release_date',
		'duration_mins',
		'description'
	];

	public function featured_films()
	{
		return $this->hasMany(FeaturedFilm::class);
	}

	public function actors()
	{
		return $this->belongsToMany(Actor::class, 'movie_actors')
					->withPivot('id', 'deleted_at');
	}

	public function countries()
	{
		return $this->belongsToMany(Country::class, 'movie_country')
					->withPivot('id', 'deleted_at');
	}

	public function directors()
	{
		return $this->belongsToMany(Director::class, 'movie_directors')
					->withPivot('id', 'deleted_at');
	}

	public function genres()
	{
		return $this->belongsToMany(Genre::class, 'movie_genre')
					->withPivot('id', 'deleted_at');
	}

	public function images()
	{
		return $this->belongsToMany(Image::class, 'movie_images')
					->withPivot('id', 'deleted_at');
	}

	public function languages()
	{
		return $this->belongsToMany(Language::class, 'movie_language')
					->withPivot('id', 'deleted_at');
	}

	public function show_times()
	{
		return $this->hasMany(ShowTime::class);
    }

    public function hasAvailableShowTimes() {
        $showTimes = $this->show_times;

        $i=0;

        foreach($showTimes as $showtime) {
            if ($showtime->getSeats() >= 1)
                $i++;
        }

        if ($i > 0)
            return true;
        else
            return false;
    }
}
