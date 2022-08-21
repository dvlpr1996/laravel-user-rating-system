<div class="space-y-6 rounded-lg bg-slate-800 p-4 font-medium text-gray-300">
		<div class="flex items-center justify-between">
				<div class="flex items-center gap-2">
						<img src="{{ $topic->user->gravatar }}" alt="{{ $topic->user->fullname }}" class="h-12 w-12 rounded-full">
						<div class="flex flex-col">
								<a href="{{ route('profile.index', $topic->user->slug) }}" class="text-base">
										{{ $topic->user->fullname }}
								</a>
								<p class="text-sm">{{ $topic->CreatedAt }}</p>
						</div>
				</div>
				<div class="flex gap-2">
						<div class="select-none rounded-lg bg-slate-900 p-3 text-center">
								<p class="text-sm">reply</p>
								<p>{{ $topic->answers->count() }}</p>
						</div>

						<div class="select-none rounded-lg bg-slate-900 p-3 text-center">
								<p class="text-sm">visit</p>
								<p>5</p>
						</div>

				</div>
		</div>

		<div>
				<p class="font-semibold">
						<a href="{{ route('topics.show', $topic->id) }}">
								{{ $topic->title }} ?
						</a>
				</p>

				<p class="line-clamp-2 my-3">{{ $topic->body }}</p>
		</div>

		<hr>

		<div class="mt-5 flex justify-between">
				<a href="{{ route('categories.index', $topic->category->slug) }}" class="tag">
						{{ $topic->category->name }}
				</a>

				<div class="flex gap-3">

						<x-report></x-report>

						@if (isset(auth()->user()->id))
								@if ($topic->user->id == auth()->user()->id)
										<a href="{{ route('topics.delete', $topic->id) }}" onclick="return confirm('Are you sure?')">delete
										</a>
								@endif
						@endif

				</div>
		</div>

</div>
