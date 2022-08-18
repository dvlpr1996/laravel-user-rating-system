<?php

namespace App\View\Components;

use App\Models\User;
use App\Models\Topic;
use App\Models\Answer;
use Illuminate\View\Component;

class statistics extends Component
{
	public $users;
	public $topics;
	public $answers;
	public $best;

	public function __construct()
	{
		$this->users = User::all()->count();
		$this->topics = Topic::all()->count();
		$this->answers = Answer::all()->count();
		$this->best = Answer::where('status', 1)->count();
	}

	public function render()
	{
		return view('components.statistics');
	}
}
