@extends('layouts.master')
@section('title', 'categories')
@section('content')

		<body class="master-body debug-screens">
				<main class="my-10 flex gap-3">
						<aside class="hidden space-y-5 md:block md:w-3/12 lg:w-2/12">
								<x-categories></x-categories>
								<hr>
								<x-statistics></x-statistics>
						</aside>

						<section class="w-full md:w-9/12 lg:w-10/12">
								<div class="text-center sm:text-left">
										<h2 class="mb-2">discussion room for {{ ucwords($category->name) }} category
										</h2>
										<span>A place where your questions become answers</span>
								</div>

								<div class="mt-5 grid grid-cols-12 gap-5">
										<div class="col-span-12 sm:col-span-9 xl:col-span-10">
												<form action="#">
														<div class="flex items-center justify-start">
																<input type="text" class="form-control m-0 rounded-r-none py-1" name=""
																		placeholder="search your topics">
																<button type="submit" class="btn w-[initial] rounded-l-none">
																		<i class="fas fa-search"></i>
																</button>
														</div>
												</form>
										</div>

										<div class="col-span-12 sm:col-span-3 xl:col-span-2">
												<a href="{{ route('topics.create') }}" class="btn w-[initial]">new topic</a>
										</div>
								</div>

								<div class="mt-5 grid grid-cols-12 items-center gap-3 sm:gap-0">
										<div class="col-span-12 sm:col-span-3">
												<select class="form-control capitalize">
														<option selected>sort by</option>
														<option value="newest">newest</option>
														<option value="oldest">oldest</option>
														<option value="no-answer">no answer</option>
														<option value="solved">solved</option>
												</select>
										</div>

										<div x-data="dropdown" x-on:click.away="away()"
												class="block sm:hidden relative col-span-12 sm:col-start-10 sm:col-end-13">
												<button x-on:click="toggle()" class="form-control cursor-pointer capitalize text-gray-50">
														categories
												</button>
												<div x-show="open" x-transition.duration.500ms
														class="absolute top-14 right-0 z-20 hidden w-full space-y-3 rounded-lg border-2 border-slate-600 bg-slate-800 p-2 sm:min-w-[200px]"
														x-bind:class="{ 'hidden': !open }">

														<x-categories></x-categories>

												</div>
										</div>
								</div>

								<section class="my-5 space-y-3">
										@forelse ($categories as $topic)
												<x-topic :topic="$topic"></x-topic>
										@empty
												<div class="rounded-lg bg-slate-500 p-5 text-center">
														<!!>no topics here yet for this category!! create once</p>
												</div>
										@endforelse
										{{ $categories->links('layouts.pagination') }}
								</section>

						</section>
				</main>
		@endsection
