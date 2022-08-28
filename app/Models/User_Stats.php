<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User_Stats extends Model
{
	use HasFactory;

	protected $table = 'user_stats';

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	protected function xp(): Attribute
	{
		return Attribute::make(
			set: fn ($value) => max($value, 0)
		);
	}

	protected function topicCount(): Attribute
	{
		return Attribute::make(
			set: fn ($value) => max($value, 0)
		);
	}

	protected function bestCount(): Attribute
	{
		return Attribute::make(
			set: fn ($value) => max($value, 0)
		);
	}

	protected function answerCount(): Attribute
	{
		return Attribute::make(
			set: fn ($value) => max($value, 0)
		);
	}
}
