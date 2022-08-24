@extends('layouts.master')
@section('title', 'topics')
@section('content')

		<body class="master-body debug-screens">
				<main class="my-10 flex gap-3">
						<aside class="hidden space-y-5 md:block md:w-3/12 lg:w-2/12">
								<div class="space-y-3">
										<h4>related topics</h4>
										<ul class="ml-2 space-y-3">
												<li>
														<a href="" class="line-clapm-1 text-base" title="">
																<i class="fas fa-dot-circle"></i>
																related topics related topics related topics
														</a>
												</li>
												<li>
														<a href="" class="line-clapm-1 text-base" title="">
																<i class="fas fa-dot-circle"></i>
																related topics related topics related topics
														</a>
												</li>
												<li>
														<a href="" class="line-clapm-1 text-base" title="">
																<i class="fas fa-dot-circle"></i>
																related topics related topics related topics
														</a>
												</li>
										</ul>
								</div>
						</aside>

						<section class="w-full md:w-9/12 lg:w-10/12">

								<div x-data="dropdown" x-on:click.away="away()"
										class="relative col-span-12 block sm:col-start-10 sm:col-end-13 md:hidden">
										<button x-on:click="toggle()" class="text-gray-50 form-control capitalize cursor-pointer">
												related topics
										</button>
										<div x-show="open" x-transition.duration.500ms
												class="border-2 border-slate-700 absolute top-14 right-0 z-20 hidden w-full space-y-3 rounded-lg bg-slate-800 p-2 sm:min-w-[200px]"
												x-bind:class="{ 'hidden': !open }">
												<ul class="ml-2 space-y-4">
														<li>
																<a href="" class="line-clapm-1 cursor-pointer text-base" title="">
																		<i class="fas fa-dot-circle"></i>
																		related topics related topics related topics
																</a>
														</li>
														<li>
																<a href="" class="line-clapm-1 cursor-pointer text-base" title="">
																		<i class="fas fa-dot-circle"></i>
																		related topics related topics related topics
																</a>
														</li>
														<li>
																<a href="" class="line-clapm-1 cursor-pointer text-base" title="">
																		<i class="fas fa-dot-circle"></i>
																		related topics related topics related topics
																</a>
														</li>
												</ul>
										</div>
								</div>
								<section class="my-5">
									<x-topic :topic="$topic"></x-topic>
								</section>

								<div class="mt-5 grid grid-cols-12 items-center gap-3 sm:gap-0">
										<h2 class="col-span-12 sm:col-span-4">
												<i class="fas fa-comment-dots mr-1"></i>
												{{ $topic->answers->count() }}
												answers
										</h2>

										<div class="col-span-12 sm:col-start-9 sm:col-end-13">
												<select class="form-control capitalize">
														<option selected>sort by</option>
														<option value="newest">newest</option>
														<option value="oldest">oldest</option>
														<option value="no-answer">lowest</option>
														<option value="solved">highest</option>
												</select>
										</div>
								</div>

								<section class="my-5 space-y-5">
										<x-answer :answers="$answers" :topic="$topic"></x-answer>
								</section>
						</section>
				</main>
		@endsection
