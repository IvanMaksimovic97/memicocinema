<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

/**
 * Class Log
 *
 * @property int $id
 * @property int $user_id
 * @property int $table_id
 * @property int $row_id
 * @property int $action_id
 * @property Carbon $created_at
 * @property string $ip_address
 * @property int $success
 *
 * @property User $user
 * @property Table $table
 * @property Action $action
 *
 * @package App\Models
 */
class Log extends Model
{
	protected $table = 'logs';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'table_id' => 'int',
		'row_id' => 'int',
		'action_id' => 'int',
		'success' => 'int'
	];

	protected $fillable = [
		'user_id',
		'table_id',
		'row_id',
		'action_id',
		'ip_address',
		'success'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function table()
	{
		return $this->belongsTo(Table::class);
	}

	public function action()
	{
		return $this->belongsTo(Action::class);
    }

    public static function createBaseLog($table_name, $row_id, $success = 1) {
        $log = new Log();

        $log->ip_address = request()->ip();
        $log->success = $success;
        $log->user_id = session()->has('user') ? session('user')['id'] : null;
        $log->table_id = Table::getId($table_name);
        $log->row_id = $row_id;

        return $log;
    }

    public static function createInsertLog($table_name, $row_id) {
        $log = Log::createBaseLog($table_name, $row_id);

        $log->action_id = Action::getId("Insert");
        $log->save();
    }

    public static function createUpdateLog($table_name, $row_id) {
        $log = Log::createBaseLog($table_name, $row_id);

        $log->action_id = Action::getId("Update");
        $log->save();
    }

    public static function createDeleteLog($table_name, $row_id) {
        $log = Log::createBaseLog($table_name, $row_id);

        $log->action_id = Action::getId("Delete");
        $log->save();
    }

    public static function createLogInAttemptLog($row_id, $success = 1) {
        $log = Log::createBaseLog('users', $row_id, $success);

        $log->action_id = Action::getId("Login");
        $log->save();
    }
}
