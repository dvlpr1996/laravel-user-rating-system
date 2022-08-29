<?php

namespace App\Http\Controllers;

use App\Models\Answer;

class VoteController extends Controller
{
	public function like(Answer $answer)
	{
		$answer->vote->like();
		return back()->withToastSuccess('Your vote Successfully effected');
	}

	public function dislike(Answer $answer)
	{
		$answer->vote->dislike();
		return back()->withToastSuccess('Your vote Successfully effected');
	}
}
