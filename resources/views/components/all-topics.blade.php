@forelse ($topics as $topic)
		<x-topic :topic="$topic"></x-topic>
@empty
		<div class="rounded-lg bg-slate-500 p-5 text-center">
				<p>no topics here yet !! create once</p>
		</div>
@endforelse

	{{ $topics->links('layouts.pagination') }}
