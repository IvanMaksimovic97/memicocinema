<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Link
 * 
 * @property int $id
 * @property string $path
 * @property string $name
 * @property bool $adminLink
 * @property bool $userLink
 *
 * @package App\Models
 */
class Link extends Model
{
	protected $table = 'links';
	public $timestamps = false;

	protected $casts = [
		'adminLink' => 'bool',
		'userLink' => 'bool'
	];

	protected $fillable = [
		'path',
		'name',
		'adminLink',
		'userLink'
	];
}
