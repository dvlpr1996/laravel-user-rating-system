<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{

	public function create()
	{
		return view('auth.register');
	}

	public function store(Request $request)
	{
		$request->validate([
			'fname' => ['required', 'string', 'max:32'],
			'lname' => ['required', 'string', 'max:64'],
			'skill' => ['required', 'string', 'max:128'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'pass' => ['required', 'confirmed', Rules\Password::defaults()],
		]);

		$user = User::create([
			'fname' => $request->fname,
			'lname' => $request->lname,
			'skill' => $request->skill,
			'email' => $request->email,
			'slug' => Str::slug($request->fname . ' ' . $request->lname),
			'password' => Hash::make($request->pass),
		]);

		event(new Registered($user));

		Auth::login($user);

		return redirect(RouteServiceProvider::HOME . auth()->user()->slug)
			->withToastSuccess( 'Welcome To Online Discussion Room');
	}
}
