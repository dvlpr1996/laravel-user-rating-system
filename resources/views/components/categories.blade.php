<div class="space-y-3">
	<h4>categories</h4>
	<ul class="ml-2 space-y-3">
			@foreach ($categories as $category)
					<li>
							<a href="{{ route('categories.index', $category->slug) }}" class="text-base"
								 title="{{ $category->slug }}">
									<i class="{{ $category->icon }} mr-1"></i>
									{{ $category->name }}
							</a>
					</li>
			@endforeach
	</ul>
</div>