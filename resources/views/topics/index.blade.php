@extends('layouts.master')
@section('title', 'topics')
@section('content')

		<body class="master-body debug-screens">
				<main class="my-10 flex gap-3">
						<aside class="hidden space-y-5 md:block md:w-3/12 lg:w-2/12">
								<div class="hr space-y-3">
										<h4>categories</h4>
										<ul class="ml-2 space-y-3">
												@foreach ($categories as $category)
														<li>
																<a href="{{ route('categories.index', $category->slug) }}" class="text-base" title="{{ $category->slug }}">
																		<i class="{{ $category->icon }} mr-1"></i>
																		{{ $category->name }}
																</a>
														</li>
												@endforeach
										</ul>
								</div>
								<div class="hr space-y-5">
										<h4>top xp</h4>
										@forelse ($user_stats as $userStats)
												<div class="flex items-center gap-2">
														<img src="{{ $userStats->user->Gravatar }}" alt="{{ $userStats->user->fullName }}"
																class="h-12 w-12 rounded-full">
														<div class="flex flex-col">
																<a href="{{ route('profile.index', $userStats->user->slug) }}" class="text-base">
																		{{ $userStats->user->fullName }}
																</a>
																<p class="text-sm">XP : {{ $userStats->xp }}</p>
														</div>
												</div>
										@empty
										@endforelse
								</div>
								<div class="space-y-3">
										<h4>statistics</h4>
										<ul class="ml-2 space-y-3">
												{{-- <li>count topics {{ $topics->alltopics }}</li> --}}
												<li>count reply 54</li>
												<li>count best 54</li>
												<li>count user 54</li>
										</ul>
								</div>
						</aside>

						<section class="w-full md:w-9/12 lg:w-10/12">
								<h2 class="mb-2">discussion room</h2>
								<span>A place where your questions become answers</span>

									<div>
										 {{-- todo : filter with select --}}
									</div>
								<div class="mt-5 grid grid-cols-12 gap-5">
										<div class="col-span-12 xl:col-span-9">
												<form action="#">
														<div class="flex items-center justify-start">
																<input type="text" class="form-control m-0 rounded-r-none py-1" name=""
																		placeholder="search your topics">
																<button type="submit" class="btn w-[initial] rounded-l-none">s</button>
														</div>
												</form>
										</div>

										<div class="col-span-12 xl:col-span-3">
												<a href="#" class="btn w-[initial]">new topic</a>
										</div>
								</div>

								<section class="my-5 space-y-3">
										@forelse ($topics as $topic)
												<div class="rounded-lg bg-slate-800 p-4 font-medium text-gray-300">

														<div class="flex items-center justify-between">
																<div class="flex items-center gap-2">
																		<img src="{{ $topic->user->gravatar }}" alt="{{ $topic->user->fullname }}"
																				class="h-12 w-12 rounded-full">
																		<div class="flex flex-col">
																				<a href="{{ route('profile.index', $topic->user->slug) }}" class="text-base">
																						{{ $topic->user->fullname }}
																				</a>
																				<p class="text-sm">{{ $topic->CreatedAt }}
																						by
																						<a href="{{ route('profile.index', $topic->user->slug) }}">{{ $topic->user->fullname }}</a>
																				</p>
																		</div>
																</div>
																<div class="flex gap-2">
																		<div class="select-none p-3 text-center">
																				<p class="text-sm">answer</p>
																				{{-- <p>{{ $topic->answers }}</p> --}}
																		</div>
																		<div class="select-none p-3 text-center">
																				<p class="text-sm">visit</p>
																				<p>5</p>
																		</div>
																</div>
														</div>

														<p class="hr">
																<a href="#">
																		{{ $topic->title }}
																</a>
														</p>

														<div class="mt-5 space-x-3">
																<a href="{{ route('categories.index', $topic->category->slug) }}" class="tag">
																		{{ $topic->category->name }}
																</a>
														</div>

												</div>
										@empty
												<p>no topics here!!! create once</p>
										@endforelse
								</section>
						</section>
				</main>
		@endsection
