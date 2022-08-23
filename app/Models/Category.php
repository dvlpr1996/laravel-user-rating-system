<?php

namespace App\Models;

use App\Models\Topic;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
	use HasFactory;

	protected $table = 'categories';

	public function topics()
	{
		return $this->hasMany(Topic::class)->orderBy('created_at', 'desc');
	}

}
