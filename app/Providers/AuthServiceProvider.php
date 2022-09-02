<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Topic;
use App\Models\Answer;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
	protected $policies = [
		// 'App\Models\Model' => 'App\Policies\ModelPolicy',
	];

	public function boot()
	{
		$this->registerPolicies();

		// answer gates
		Gate::define('createAnswer', function (User $user, Topic $topic) {
			return auth()->user()->id !== $topic->user->id ? Response::allow()
				: Response::deny('You must login first.');
		});

		Gate::define('like', function (User $user, Answer $answer) {
			return auth()->user()->id !== $answer->user->id ? Response::allow()
				: Response::deny('You must login first.');
		});

		Gate::define('editAnswer', function (User $user, Answer $answer) {
			return auth()->user()->id === $answer->user->id ? Response::allow()
				: Response::deny('You must login first.');
		});

		// topic gates
		Gate::define('addTopic', function (User $user, User $userName) {
			return auth()->user()->slug === $userName->slug ? Response::allow()
				: Response::deny('You must login first.');
		});

		Gate::define('editTopic', function (User $user, Topic $topic) {
			return auth()->user()->id === $topic->user->id ? Response::allow()
				: Response::deny('You must login first.');
		});
	}
}
