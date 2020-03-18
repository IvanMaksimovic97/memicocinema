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
 * Class User
 * 
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * @property string $username
 * @property string $email
 * @property string $password
 * @property bool $active
 * @property int $role_id
 * @property string $auth_key
 * 
 * @property Role $role
 * @property Collection|Log[] $logs
 * @property Collection|Reservation[] $reservations
 *
 * @package App\Models
 */
class User extends Model
{
	use SoftDeletes;
	protected $table = 'users';

	protected $casts = [
		'active' => 'bool',
		'role_id' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'email',
		'password',
		'active',
		'role_id',
		'auth_key'
	];

	public function role()
	{
		return $this->belongsTo(Role::class);
	}

	public function logs()
	{
		return $this->hasMany(Log::class);
	}

	public function reservations()
	{
		return $this->hasMany(Reservation::class);
	}
}
