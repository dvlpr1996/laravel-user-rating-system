<section class="my-5 space-y-3">
		<div class="rounded-lg bg-slate-800 p-4 font-medium text-gray-300">

				<div class="flex items-center justify-between">
						<div class="flex items-center gap-2">
								<img src="{{ $topic->user->gravatar }}" alt="{{ $topic->user->fullname }}" class="h-12 w-12 rounded-full">
								<div class="flex flex-col">
										<a href="{{ route('profile.index', $topic->user->slug) }}" class="text-base">
												{{ $topic->user->fullname }}
										</a>
										<p class="text-sm">{{ $topic->CreatedAt }}
												by
												<a href="{{ route('profile.index', $topic->user->slug) }}">{{ $topic->user->fullname }}</a>
										</p>
								</div>
						</div>
						<div class="flex gap-2">
								<div class="select-none p-3 text-center">
										<p class="text-sm">answer</p>
										{{-- <p>{{ $topic->answers }}</p> --}}
								</div>
								<div class="select-none p-3 text-center">
										<p class="text-sm">visit</p>
										<p>5</p>
								</div>
						</div>
				</div>

				<p class="font-semibold">
						<a href="{{ route('topics.show' , $topic->id) }}">
								{{ $topic->title }} ?
						</a>
				</p>

				<p class="hr my-3">{{ $topic->body }}</p>

				<div class="mt-5 flex justify-between">
						<a href="{{ route('categories.index', $topic->category->slug) }}" class="tag">
								{{ $topic->category->name }}
						</a>

						<a href="#">report</a>
				</div>

		</div>
</section>
