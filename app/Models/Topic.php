<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Answer;

class Topic extends Model
{
	use HasFactory;

	protected $table = 'topics';
	protected $fillable = [
		"title",
    "category_id",
    "body"
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function answers()
	{
		return $this->hasMany(Answer::class)->orderByDesc('created_at');
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function getCreatedAtAttribute()
	{
		return (new Carbon($this->attributes['created_at']))->diffForHumans();
	}
}
