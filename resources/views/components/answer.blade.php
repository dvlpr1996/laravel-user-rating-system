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
								<a href="#" class="select-none hover:text-green-600">
										<i class="fas fa-thumbs-up"></i>
								</a>

								<span>0</span>

								<a href="#" class="select-none hover:text-red-600">
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
												<a href="{{ route('answer.delete', $answer->id) }}" onclick="return confirm('Are you sure?')">delete
												</a>
										@endif
								@endif
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

		@auth
				<section class="my-16">
						<form class="space-y-3" method="POST"
						 action="{{ route('answer.store' , $topic->id) }}">
							@csrf
								<div class="w-full">
										<label>
												your answer
												<textarea class="form-control" cols="30" rows="5" name="body"
												placeholder="type your answer">
													{{ old('body') }}
												</textarea>
										</label>
								</div>

								<button type="submit" class="btn w-full sm:max-w-max">send it</button>
						</form>
				</section>
		@endauth
@endforelse

{{ $answers->links('layouts.pagination') }}
