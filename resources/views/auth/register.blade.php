@extends('layouts.authMaster')
@section('title', 'register')
@section('content')

		<body class="p-4 sm:p-0">
				<main class="flex min-h-screen flex-col items-center justify-center">

						<div class="form-wrapper w-[450px] bg-slate-800 px-5 py-2">

							<div class="text-center mb-7">
								<x-app-logo class="mx-auto block"></x-app-logo>
								<span>Join the forum</span>
							</div>

								<form class="space-y-4" method="POST" action="{{ route('register.store') }}">
										@csrf
										<div class="flex flex-col items-center justify-between gap-2 sm:flex-row">
												<div class=w-full>
														<label>
																first name
																<span class="text-sm text-rose-600">
																		<i class="ri-asterisk"></i>
																</span>
																<input type="text" placeholder="first name" name="fname" class="form-control" required minlength="3"
																		maxlength="32" value="{{ old('fname') }}" onclick="this.value=''">
														</label>
												</div>

												<div class=w-full>
														<label>
																last name
																<span class="text-sm text-rose-600">
																		<i class="ri-asterisk"></i>
																</span>
																<input type="text" placeholder="last name" name="lname" class="form-control" required minlength="3"
																		maxlength="64" value="{{ old('lname') }}" onclick="this.value=''">
														</label>
												</div>
										</div>

										<div>
												<label>
													occupation
														<span class="text-sm text-rose-600">
																<i class="ri-asterisk"></i>
														</span>
														<input type="text" placeholder="occupation" name="skill" class="form-control" required maxlength="512"
																value="{{ old('skill') }}" onclick="this.value=''">
												</label>
										</div>

										<div>
												<label>
														email
														<span class="text-sm text-rose-600">
																<i class="ri-asterisk"></i>
														</span>
														<input type="email" placeholder="email address" name="email" class="form-control" required
																value="{{ old('email') }}" onclick="this.value=''">
												</label>
										</div>

										<div class="flex flex-col items-center justify-between gap-2 sm:flex-row">
												<div class=w-full>
														<label>
																password
																<span class="text-sm text-rose-600">
																		<i class="ri-asterisk"></i>
																</span>
																<input type="password" placeholder="password" name="pass" class="form-control" required minlength="6"
																		maxlength="128" onclick="this.value=''">
														</label>
												</div>

												<div class=w-full>
														<label>
																confirm password
																<span class="text-sm text-rose-600">
																		<i class="ri-asterisk"></i>
																</span>
																<input type="password" placeholder="confirm password" name="pass_confirmation" class="form-control"
																		required minlength="6" maxlength="128" onclick="this.value=''">
														</label>
												</div>
										</div>

										<button type="submit" class="btn py-3">registered</button>

										<a href="{{ route('login.create') }}" class="my-5 text-sm inline-block">already have an account</a>
								</form>
						</div>
				</main>

		@endsection
