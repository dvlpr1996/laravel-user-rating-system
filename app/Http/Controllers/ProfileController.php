<?php

namespace App\Http\Controllers;

use App\Models\User;

class ProfileController extends Controller
{
	public function index(User $userName)
	{
		$userTopics = $userName->topics()->paginate(5);
		return view('profile', compact('userName','userTopics'));
	}

	public function showBadge(User $userName) {
		//
	}
}
