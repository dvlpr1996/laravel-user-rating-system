@extends('layouts.master')
@section('title', 'edit topics')
@section('content')

		<body class="master-body">
				<main class="my-10 flex gap-3">
						<aside class="hidden space-y-5 md:block md:w-3/12 lg:w-2/12">
								<x-categories></x-categories>
						</aside>

						<section class="w-full md:w-9/12 lg:w-10/12">

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

								<h2 class="mb-5">edit your topic </h2>

								<form method="POST" action="{{ route('topics.update', $topic->id) }}">
										@csrf
										@method('put')

										<div class="space-y-5">
												<div>
														<label>
																new topic title
																<input type="text" name="title" placeholder="topic title" class="form-control"
																		value="{{ $topic->title }}">
														</label>
												</div>
												<div>
														<label for="category">select new topic category</label>

														<select class="form-control capitalize" name="category_id" id="category">
																@foreach ($categories as $category)
																		<option value="{{ $category->id }}"
																			{{ $category->id == $topic->category_id ? 'selected' : '' }}>
																			{{ $category->name }} </option>
																@endforeach
														</select>
												</div>

												<textarea class="form-control" rows="6" name="body">{{ $topic->body }}</textarea>

												<div>
														<button type="submit" class="btn w-full sm:max-w-max">
																update your topic
														</button>
												</div>
										</div>
								</form>
						</section>
				</main>
		@endsection
