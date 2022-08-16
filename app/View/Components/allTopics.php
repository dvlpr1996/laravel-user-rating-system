<?php

namespace App\View\Components;

use App\Models\Topic;
use Illuminate\View\Component;

class allTopics extends Component
{
	public $topics;

	public function __construct()
	{
		$this->topics = Topic::paginate(5);
	}

	public function render()
	{
		return view('components.all-topics');
	}
}
