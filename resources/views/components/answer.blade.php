@forelse ($answers as $answer)
		@php
				$isActive = $answer->status ? true : false;
		@endphp

		<div @class([
				'rounded-lg',
				'bg-slate-800',
				'p-4',
				'font-medium',
				'text-gray-300',
				'border-2' => $isActive,
				'border-green-800' => $isActive,
		])>

				<div class="flex items-center justify-between">
						<div class="flex items-center gap-2">
								<img src="{{ $answer->user->gravatar }}" alt="{{ $answer->user->fullname }}" class="h-12 w-12 rounded-full">
								<div class="flex flex-col">
										<a href="{{ route('profile.index', $answer->user->slug) }}" class="text-base">
												{{ $answer->user->fullname }}
										</a>
										<p class="text-sm">{{ $answer->CreatedAt }}
												answerd by
												<a href="{{ route('profile.index', $answer->user->slug) }}">{{ $answer->user->fullname }}</a>
										</p>
								</div>
						</div>

						@if ($answer->status)
								<span class="tag py-2 text-sm">best answer</span>
						@endif

				</div>

				<div class="flex items-center gap-6">
						<div class="flex flex-col gap-6">
								<a href="#">5</a>
								<span>0</span>
								<a href="#">5</a>
						</div>

						<p @class([
								'hr',
								'my-5',
								'border-b-2' => $isActive,
								'border-green-800' => $isActive,
						])>{{ $answer->body }}</p>
				</div>

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
						<div class="mx-auto mt-10 w-11/12 sm:w-9/12 md:w-6/12 lg:w-8/12">
								<form class="space-y-3" method="POST" action="#">
										<div>
												<label>
														your answer
														<span class="text-sm text-rose-600">
																<i class="ri-asterisk"></i>
														</span>
														<textarea class="form-control" cols="30" rows="5" name="msg" onclick="this.value=''">{{ old('msg') }}</textarea>
												</label>
										</div>

										<button type="submit" class="btn">send it</button>

								</form>
						</div>
				</section>
		@endauth
@endforelse

{{ $answers->links('layouts.pagination') }}
