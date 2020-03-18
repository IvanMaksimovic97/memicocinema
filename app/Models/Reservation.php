<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Reservation
 * 
 * @property int $id
 * @property int $show_time_id
 * @property int $user_id
 * @property int $reserved_seats
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property ShowTime $show_time
 * @property User $user
 *
 * @package App\Models
 */
class Reservation extends Model
{
	use SoftDeletes;
	protected $table = 'reservations';

	protected $casts = [
		'show_time_id' => 'int',
		'user_id' => 'int',
		'reserved_seats' => 'int'
	];

	protected $fillable = [
		'show_time_id',
		'user_id',
		'reserved_seats'
	];

	public function show_time()
	{
		return $this->belongsTo(ShowTime::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
