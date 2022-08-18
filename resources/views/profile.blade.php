@extends('layouts.master')
@section('title', 'Profile')
@section('content')

		<body class="master-body">
				<main>
						<header class="mt-5 rounded-lg bg-slate-800 p-5">
								<div class="flex flex-col items-center gap-3">
										<img src="{{ $userName->Gravatar }}" alt="{{ $userName->fullName }}"
												class="h-48 w-48 rounded-full object-fill outline-none outline-2 outline-offset-4 outline-slate-900">

										<h1>{{ $userName->fullName }}</h1>
										<p>{{ $userName->skill }}</p>

								</div>

								<div class="mt-5 flex items-center justify-between">
										@if (isset(auth()->user()->slug))
												@if ($userName->slug == auth()->user()->slug)
														<a href="{{ route('topics.create') }}" class="btn w-[initial]">
																new topics
														</a>
												@endif
										@endif
										<p>date of join {{ $userName->CreatedAt }}</p>
								</div>
						</header>

						<div class="mt-5 rounded-lg bg-slate-800 p-5">
								<ul class="flex flex-col flex-wrap items-center justify-evenly gap-5 text-gray-300 sm:flex-row lg:flex-nowrap">
										<li class="text-2xl">
												<a href="{{ route('profile.index', $userName->slug) }}">
														topics :
														{{ $userName->user_stat->topic_count ?? 0}}
												</a>
										</li>
										<li class="text-2xl">
												<a href="{{ route('profile.badge', $userName->slug) }}">
														xp :
														{{ $userName->user_stat->xp ?? 0 }}
												</a>
										</li>

										<li class="text-2xl">
											answers : {{ $userName->user_stat->answer_count ?? 0}}
										</li>
										<li class="text-2xl">
											best answers : {{ $userName->user_stat->best_count ?? 0}}
										</li>
								</ul>
						</div>


						<section class="my-5 space-y-5">
								<h2>🚚all topics</h2>
								@forelse ($userTopics as $topic)
										<x-topic :topic="$topic"></x-topic>
								@empty
										<div class="rounded-lg bg-slate-500 p-5 text-center">
												<!!>no topics here yet for this category!! create once</p>
										</div>
								@endforelse
								{{ $userTopics->links('layouts.pagination') }}
						</section>

				</main>
		@endsection
