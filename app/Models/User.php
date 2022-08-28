<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User_Stats;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
		return $this->hasMany(Topic::class)->orderByDesc('created_at');
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

	public function getFullNameAttribute()
	{
		return "{$this->fname} {$this->lname}";
	}

	public function getGravatarAttribute()
	{
		$hash = md5(strtolower($this->attributes['email']));
		return "http://s.gravatar.com/avatar/$hash";
	}

	public function getCreatedAtAttribute()
	{
		return (new Carbon($this->attributes['created_at']))->diffForHumans();
	}

	public function incrementXp($number)
	{
		$this->user_stat->xp += $number;
		$this->user_stat->save();
	}

	public function decrementXp($number)
	{
		$this->user_stat->xp -= $number;
		$this->user_stat->save();
	}

	public function incrementColumnCount(string $colName, int $count)
	{
		$this->user_stat->increment($colName, $count);
		$this->user_stat->save();
	}

	public function decrementColumnCount(string $colName, int $count)
	{
		if ($this->user_stat->$colName !== 0) {
			$this->user_stat->decrement($colName, $count);
			$this->user_stat->save();
		}
	}
}
