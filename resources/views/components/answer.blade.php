@forelse ($answers as $answer)
		@php
				$isActive = $answer->status ? true : false;
		@endphp

		<div @class([
				'rounded-lg',
				'bg-slate-800',
				'p-4',
				'space-y-5',
				'font-medium',
				'text-gray-300',
				'border-2' => $isActive,
				'border-green-600' => $isActive,
		])>

				<div class="flex items-center justify-between">
						<div class="flex items-center gap-2">
								<img src="{{ $answer->user->gravatar }}" alt="{{ $answer->user->fullname }}" class="h-12 w-12 rounded-full">
								<div class="flex flex-col">
										<a href="{{ route('profile.index', $answer->user->slug) }}" class="text-base">
												{{ $answer->user->fullname }}
										</a>
										<p class="text-sm">{{ $answer->CreatedAt }} answerd</p>
								</div>
						</div>

						@if ($answer->status)
								<span class="tag cursor-default bg-green-600 py-2 text-sm text-gray-50 hover:bg-green-500">
										<i class="fas fa-check-circle"></i>
										best answer
								</span>
						@endif

				</div>

				<div class="flex items-center gap-6">
						<div class="flex flex-col items-center gap-6">
								<a href="{{ route('like', $answer->id) }}" class="select-none hover:text-green-600">
										<i class="fas fa-thumbs-up"></i>
								</a>

								<span>{{ $answer->vote->vote }}</span>

								<a href="{{ route('dislike', $answer->id) }}" class="select-none hover:text-red-600">
										<i class="fas fa-thumbs-down"></i>
								</a>
						</div>

						<p>{{ $answer->body }}</p>

				</div>

				<hr @class([
						'my-5',
						'border-b' => $isActive,
						'border-green-600' => $isActive,
				])>

				<div class="mt-5 flex justify-between">
						<a href="{{ route('categories.index', $answer->topic->category->slug) }}" class="tag">
								{{ $answer->topic->category->name }}
						</a>

						<div class="flex gap-3">

								<x-report></x-report>

								@if (isset(auth()->user()->id))
										@if ($answer->user_id == auth()->user()->id)
												<a href="{{ route('answer.delete', $answer->id) }}" onclick="return confirm('Are you sure?')"
														class="cursor-pointer">
														<i class="fas fa-trash ml-1"></i>
												</a>
										@endif
								@endif

								<div x-data="dropdown" x-on:click.away="away()" class="relative">
										<i x-on:click="toggle()" class="fas fa-edit ml-1 cursor-pointer capitalize text-gray-50"></i>
										<div x-show="open" x-transition.duration.500ms
												class="absolute bottom-0 right-0 z-20 hidden w-96 space-y-3 rounded-lg border-2 border-slate-700 bg-slate-800 p-2"
												x-bind:class="{ 'hidden': !open }">
												<form class="space-y-3" method="POST" action="{{ route('answer.update', $answer->id) }}">
														@csrf
														@method('put')

														<div class="w-full">
																<label>your new answer</label>
																<textarea class="form-control" cols="30" rows="5" name="body" placeholder="type your answer">
																{{ $answer->body }}
															</textarea>
														</div>

														<button type="submit" class="btn w-full sm:max-w-max">update it</button>
												</form>
										</div>
								</div>

						</div>
				</div>

		</div>

@empty
		@guest
				<div class="rounded-lg bg-slate-500 p-5 text-center">
						<p>
								You need to <a href="{{ route('login.create') }}">login</a>
								or
								<a href="{{ route('register.create') }}">register</a>
								to post an answer
						</p>
				</div>
		@endguest
@endforelse

{{ $answers->links('layouts.pagination') }}

@auth
		<section>
				<form class="space-y-3" method="POST" action="{{ route('answer.store', $topic->id) }}">
						@csrf
						<div class="w-full">
								<label>your answer {{ auth()->user()->fullName }} to this topic</label>
								<textarea class="form-control" cols="30" rows="5" name="body" placeholder="type your answer">
									{{ old('body') }}
						</textarea>
						</div>

						<button type="submit" class="btn w-full sm:max-w-max">send it</button>
				</form>
		</section>
@endauth
