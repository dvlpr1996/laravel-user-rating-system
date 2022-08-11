<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
	use HasFactory;
	protected $table = 'answers';

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	// public function topic()
	// {
	// 	return $this->belongsTo(Topic::class);
	// }
}