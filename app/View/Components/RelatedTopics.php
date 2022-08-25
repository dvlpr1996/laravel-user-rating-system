<?php

namespace App\View\Components;

use App\Models\Topic;
use Illuminate\View\Component;

class RelatedTopics extends Component
{
	public $relatedTopics;

	public function __construct(Topic $topic)
	{
		$this->relatedTopics = Topic::select('title', 'id')
		->where('category_id', $topic->category_id)->inRandomOrder()->take(4)->get();
	}

	public function render()
	{
		return view('components.related-topics');
	}
}
