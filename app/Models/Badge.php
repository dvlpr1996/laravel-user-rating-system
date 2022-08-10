<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
	use HasFactory;
	protected $table = 'badges';

	// public function badge_users()
	// {
	// 	return $this->hasMany(Badge_User::class);
	// }
}
