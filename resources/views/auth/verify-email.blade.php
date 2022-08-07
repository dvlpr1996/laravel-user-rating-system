@extends('layouts.authMaster')
@section('title', 'verify email address')
@section('content')

		<body class="px-4">
				@if (session('status') == 'verification-link-sent')
						<div class="mb-4 text-sm font-medium text-green-600">
								{{ __('A new verification link has been sent to the email address you provided during registration.') }}
						</div>
				@endif
				<main class="flex min-h-screen flex-col items-center justify-center">
						<div class="form-wrapper w-[450px] space-y-5 bg-slate-800">

								@if (session('status') == 'verification-link-sent')
										<div class="mb-4 rounded-lg bg-green-300 p-4 text-center text-sm font-medium text-green-900">
												A new verification link has been sent to the email address you provided during registration.
										</div>
								@endif

								<h3 class="text-center">verify your email address</h3>

								<p class="text-center text-sm leading-6 tracking-wider">
										Thanks for signing up! Before getting started, could you verify your email address by clicking on the above
										button
								</p>

								<form class="space-y-4" method="POST" action="{{ route('verification.send') }}">
										@csrf
										<div>
												<button type="submit" class="btn">send Verification Email</button>
										</div>
								</form>

								<a href="{{ route('logout') }}" class="inline-block">logout</a>
						</div>
				</main>
		@endsection
