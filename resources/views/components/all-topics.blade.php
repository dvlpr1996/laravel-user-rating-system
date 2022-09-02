@forelse ($topics as $topic)
		<x-topic :topic="$topic"></x-topic>
@empty
		<div class="rounded-lg bg-slate-700 p-5 text-center">
				<p>no topics here yet for this category!!
						<a href="{{ route('topics.create') }}" class="cursor-pointer underline underline-offset-8">
								create once
						</a>
				</p>
		</div>
@endforelse

{{ $topics->links('layouts.pagination') }}
