@extends('layouts.authMaster')
@section('title', 'Login')
@section('content')

		<body class="px-4">
				<div>

						<x-auth-session-status class="mb-4" :status="session('status')" />
						<x-auth-validation-errors class="mb-4" :errors="$errors" />

						<main class="flex min-h-screen flex-col items-center justify-center">

								<div class="form-wrapper w-[300px] bg-slate-800">
									<div class="text-center mb-7">
										<img src="https://fakeimg.pl/50x50/ff0000/" alt="" class="logo block mx-auto">
										<span>welcome back</span>
									</div>
										<form class="space-y-3" method="POST" action={{ route('login.store') }}>
												@csrf

												<div>
														<label>
																email address
																<input type="email" name="email" placeholder="username" class="form-control" value="{{ old('email') }}"
																		onclick="this.value=''">
														</label>
												</div>

												<div>
														<label>
																password
																<input type="password" name="password" placeholder="password" class="form-control" minlength="6"
																		maxlength="128">
														</label>
												</div>

												<div>
														<input type="checkbox" id="checkbox" name="remember">
														<label class="text-sm" for="checkbox">
																remember me
														</label>
												</div>

												<div>
														<button type="submit" class="btn">sign in</button>
												</div>

												<div class="space-x-2 text-center">
														<a href="{{ route('password.request') }}" class="text-sm">
																forgot password
														</a>
														<a href="{{ route('register.create') }}" class="text-sm">Create account</a>
												</div>
										</form>
								</div>
						</main>
				</div>
		@endsection
