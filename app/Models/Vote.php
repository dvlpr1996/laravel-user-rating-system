<?php

namespace App\Models;


use App\Models\Answer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vote extends Model
{
	use HasFactory;

	protected $table = 'votes';

	protected $fillable = ['topic_id'];

	public function answer()
	{
		return $this->hasOne(Answer::class);
	}

	public function like()
	{
		$this->increment('vote', 1);
		$this->save();
	}

	public function dislike()
	{
		$this->decrement('vote', 1);
		$this->save();
	}
}
