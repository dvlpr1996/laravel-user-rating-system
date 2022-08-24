<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
	public function created(User $user)
	{
		$user->user_stat()->create();
	}
}
