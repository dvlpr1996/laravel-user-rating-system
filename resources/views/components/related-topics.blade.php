<ul class="ml-2 space-y-3">
	@forelse ($relatedTopics as $relatedTopic)
	<li>
		<a href="{{ route('topics.show', $relatedTopic->id) }}" class="line-clapm-1 text-base"
			 title="{{ $relatedTopic->title }}">
				<i class="fas fa-dot-circle"></i>
				{{ $relatedTopic->title }}
		</a>
</li>
	@empty
		<p>related topics not exists</p>
	@endforelse
</ul>