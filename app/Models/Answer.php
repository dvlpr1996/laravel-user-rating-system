<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
	use HasFactory;

	const XP = 2;

	protected $table = 'answers';
	protected $fillable = ['body' , 'user_id'];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function topic()
	{
		return $this->belongsTo(Topic::class);
	}

	public function getCreatedAtAttribute()
	{
		return (new Carbon($this->attributes['created_at']))->diffForHumans();
	}
}
