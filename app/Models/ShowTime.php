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
 * Class ShowTime
 *
 * @property int $id
 * @property int $movie_id
 * @property Carbon $time
 * @property int $seats
 * @property string $deleted_at
 *
 * @property Movie $movie
 * @property Collection|Reservation[] $reservations
 *
 * @package App\Models
 */
class ShowTime extends Model
{
	use SoftDeletes;
	protected $table = 'show_times';
	public $timestamps = false;

	protected $casts = [
		'movie_id' => 'int',
		'seats' => 'int'
	];

	protected $dates = [
		'time'
	];

	protected $fillable = [
		'movie_id',
		'time',
		'seats'
	];

	public function movie()
	{
		return $this->belongsTo(Movie::class);
	}

	public function reservations()
	{
		return $this->hasMany(Reservation::class);
    }

    public function getSeats() {
        $reservations = $this->reservations;

        $sum = 0;

        foreach ($reservations as $reservation)
            $sum += $reservation->reserved_seats;

        return $this->seats - $sum;
    }
}
