@extends('layouts.master')
@section('title', 'categories')
@section('content')

		<body class="master-body debug-screens">
				<main class="my-10 flex gap-3">
						<section class="w-full md:w-9/12 lg:w-10/12">
								<h2 class="mb-2">discussion room for {{ ucwords($category->name) }} category</h2>
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
