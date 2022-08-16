@forelse ($topic->answers as $answer)
		<div class="rounded-lg bg-slate-800 p-4 font-medium text-gray-300">

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

						<a href="#" class="tag text-sm">best answer</a>

				</div>

				<div class="flex items-center gap-6">
						<div class="flex flex-col gap-6">
								<a href="#">5</a>
								<span>0</span>
								<a href="#">5</a>
						</div>

						<p class="hr my-5">{{ $answer->body }}</p>
				</div>

				<div class="mt-5 flex justify-between">
						<a href="{{ route('categories.index', $topic->category->slug) }}" class="tag">
								{{ $topic->category->name }}
						</a>

						<a href="#">report</a>
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
