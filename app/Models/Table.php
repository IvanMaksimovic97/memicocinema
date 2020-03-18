<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Table
 *
 * @property int $id
 * @property string $name
 * @property string $table_name
 *
 * @property Collection|Log[] $logs
 *
 * @package App\Models
 */
class Table extends Model
{
	protected $table = 'tables';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'table_name'
	];

	public function logs()
	{
		return $this->hasMany(Log::class);
    }

    public static function getId($table_name) {
        $table = Table::where('table_name','like',"%".$table_name."%")->first();

        return $table->id;
    }
}
