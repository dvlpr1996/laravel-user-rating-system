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
														<a href="" class="text-base" title="">
																related topics
														</a>
												</li>
										</ul>
								</div>
						</aside>

						<section class="w-full md:w-9/12 lg:w-10/12">

								<section class="my-5 space-y-3">
										<x-topic :topic="$topic"></x-topic>
								</section>


								<section>
									<x-answer :topic="$topic"></x-answer>
								</section>
						</section>
				</main>
		@endsection
