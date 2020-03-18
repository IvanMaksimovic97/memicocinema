<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Action
 *
 * @property int $id
 * @property string $name
 *
 * @property Collection|Log[] $logs
 *
 * @package App\Models
 */
class Action extends Model
{
	protected $table = 'actions';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function logs()
	{
		return $this->hasMany(Log::class);
    }

    public static function getId($action_name) {
        $action = Action::where('name','like',"%".$action_name."%")->first();

        return $action->id;
    }
}
