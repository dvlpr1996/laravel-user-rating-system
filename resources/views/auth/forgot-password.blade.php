@extends('layouts.authMaster')
@section('title', 'Forgot password')
@section('content')

		<body class="px-4">
				<main class="flex min-h-screen flex-col items-center justify-center">

						<x-auth-session-status class="mb-4" :status="session('status')" />
						<x-auth-validation-errors class="mb-4" :errors="$errors" />

						<div class="form-wrapper w-[450px] bg-slate-800">

								<form class="space-y-4" method="POST" action="{{ route('password.email') }}">
										@csrf
										<h3 class="text-center">forgot password</h3>
										<div>
												<label>
														email address
														<input type="email" placeholder="type your username" class="form-control" onclick="this.value=''"
																name="email">
												</label>
										</div>

										<div>
												<button type="submit" class="btn">send</button>
										</div>

										<p class="text-center text-sm">
												we will email you a password reset link will allow you to choose a new one
										</p>
								</form>
						</div>
				</main>
		@endsection
