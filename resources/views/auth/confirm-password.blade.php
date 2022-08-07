@extends('layouts.authMaster')
@section('title', 'Confirm Password')
@section('content')

		<body class="px-4">

				<main class="flex min-h-screen flex-col items-center justify-center">
						<x-auth-validation-errors class="mb-4" :errors="$errors" />
						<div class="form-wrapper w-[450px] bg-slate-800">

								<form class="space-y-4" method="POST" action="{{ route('password.confirm') }}">
										@csrf
										<h3 class="text-center">Confirm Password</h3>

										<div>
												<label>
														password
														<input type="password" placeholder="type your password" class="form-control" onclick="this.value=''"
																name="password">
												</label>
										</div>

										<div>
												<button type="submit" class="btn">send</button>
										</div>

										<p class="text-center text-sm">
												This is a secure area of the application. Please confirm your password before continuing.
										</p>
								</form>

						</div>
				</main>
		@endsection
