@extends('layouts.master')
@section('title', 'Profile')
@section('content')

		<body class="master-body">
				<main>
						@if (session('success'))
								{{ session('status') }}
						@endif
						<header class="mt-5 rounded-lg bg-slate-800 p-5">
								<div class="flex flex-col items-center gap-3">
										<img src="#" alt="#"
												class="h-48 w-48 rounded-full object-fill outline-none outline-2 outline-offset-4 outline-slate-900">

										<h1>{{ $userName->fullName }}</h1>
										<p>{{ $userName->skill }}</p>

								</div>

								<div class="mt-5 flex items-center justify-between">
										@if($userName->slug == auth()->user()->slug)
												<a href="{{ route('topics.create') }}" class="btn w-[initial]">
													new topics
												</a>
										@endif
										<p>date of join {{ $userName->created_at }}</p>
								</div>
						</header>

						<div class="mt-5 rounded-lg bg-slate-800 p-5">
								<ul class="flex flex-col flex-wrap items-center justify-evenly gap-5 text-gray-300 sm:flex-row lg:flex-nowrap">
										{{-- fix : with js add | and control for responsive mode --}}
										<li class="text-2xl">xp 500</li>
										<li class="text-2xl">topics 500</li>
										<li class="text-2xl">answers 500</li>
										<li class="text-2xl">best answers 500</li>
								</ul>
						</div>

				</main>
		@endsection
