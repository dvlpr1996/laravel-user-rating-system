<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Answer;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\AnswerFormRequest;

class AnswerController extends Controller
{
	public function delete(Answer $answer)
	{
		if(!Gate::allows('editAnswer', $answer))
			abort(403);
			
		Answer::findOrFail($answer->id)->delete();
		return back()->withToastSuccess('Your topics Successfully deleted');
	}

	public function store(AnswerFormRequest $request, Topic $topic)
	{
		if(!Gate::allows('createAnswer', $topic))
			abort(403);

		$topic->answers()->create([
			'user_id' => auth()->user()->id,
			'body' => $request['body']
		]);

		return back()->withToastSuccess('Your answer Successfully sent');
	}

	public function update(AnswerFormRequest $request, Answer $answer)
	{
		if(!Gate::allows('editAnswer', $answer))
			abort(403);

		$answer->update(['body' => $request['body']]);
		return back()->withToastSuccess('Your answer Successfully updated');
	}
}
