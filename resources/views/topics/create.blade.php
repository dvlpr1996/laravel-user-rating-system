@extends('layouts.master')
@section('title', 'create topics')
@section('content')

		<body class="master-body debug-screens">
				<main class="my-10 flex gap-3">

						<aside class="hidden space-y-5 md:block md:w-3/12 lg:w-2/12">
								<x-categories></x-categories>
						</aside>

						<section class="w-full space-y-5 md:w-9/12 lg:w-10/12">

								<div class="rounded-lg border-2 border-sky-900 bg-sky-300 p-4 text-center text-sky-900 sm:text-left">
										<p>
												<i class="fas fa-info-circle mr-1"></i>
												Avoid asking repetitive questions
										</p>
										<p>
												<i class="fas fa-info-circle mr-1"></i>
												State the title of the question clearly
										</p>
										<p>
												<i class="fas fa-info-circle mr-1"></i>
												Try to make the question title short
										</p>
								</div>

								<div x-data="dropdown" x-on:click.away="away()"
										class="relative col-span-12 block sm:col-start-10 sm:col-end-13 sm:hidden">
										<button x-on:click="toggle()" class="form-control cursor-pointer capitalize text-gray-50">
												categories
										</button>
										<div x-show="open" x-transition.duration.500ms
												class="absolute top-14 right-0 z-20 hidden w-full space-y-3 rounded-lg border-2 border-slate-600 bg-slate-800 p-2 sm:min-w-[200px]"
												x-bind:class="{ 'hidden': !open }">

												<x-categories></x-categories>

										</div>
								</div>

								<form  method="POST" action="{{ route('topics.store') }}">
									@csrf

										<div class="space-y-5">
												<div>
														<label>
																topic title
																<input type="text" name="title" placeholder="topic title" class="form-control"
																		value="{{ old('title') }}">
														</label>
												</div>


												<div class="">
														<label for="category">select topic category</label>
														<select class="form-control capitalize" name="category_id" id="category">
															
																@foreach ($categories as $category)
																		<option value="{{ $category->id }}">
																				{{ $category->name }}
																		</option>
																@endforeach
														</select>
												</div>

												<textarea class="form-control" rows="6" name="body" value="{{ old('body') }}">type your question body ...
												</textarea>

												<div>
														<button type="submit" class="btn w-full sm:max-w-max">
															create your topic
														</button>
												</div>
										</div>
								</form>
						</section>
				</main>
		@endsection
