<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Support\Facades\Gate;

class VoteController extends Controller
{
	public function like(Answer $answer)
	{
		if(!Gate::allows('like', $answer))
			abort(403);

		$answer->vote->like();
		return back()->withToastSuccess('Your vote Successfully effected');
	}

	public function dislike(Answer $answer)
	{
		if(!Gate::allows('like', $answer))
			abort(403);
			
		$answer->vote->dislike();
		return back()->withToastSuccess('Your vote Successfully effected');
	}
}
