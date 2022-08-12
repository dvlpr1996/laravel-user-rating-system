<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
	use HasApiTokens, HasFactory, Notifiable;

	protected $fillable = [
		'fname',
		'lname',
		'skill',
		'email',
		'slug',
		'password',
	];

	/**
	 * The attributes that should be hidden for serialization.
	 *
	 * @var array<int, string>
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];

	/**
	 * The attributes that should be cast.
	 *
	 * @var array<string, string>
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	public function topics()
	{
		return $this->hasMany(Topic::class);
	}

	public function user_stat()
	{
		return $this->hasOne(User_Stats::class);
	}

	public function badges()
	{
		return $this->belongsToMany(Badge::class)->withTimestamps();
	}

	// public function badge_user()
	// {
	// 	return $this->hasOne(Badge_User::class);
	// }

	// public function answers()
	// {
	// 	return $this->hasMany(Answers::class);
	// }

	public function getFullNameAttribute()
	{
		return "{$this->fname} {$this->lname}";
	}

	public function getAvatarAttribute()
	{
		return "{$this->fname} {$this->lname}";
	}
}
