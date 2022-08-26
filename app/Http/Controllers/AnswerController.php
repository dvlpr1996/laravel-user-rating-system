<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Answer;
use Illuminate\Http\Request;
use App\Http\Requests\AnswerFormRequest;

class AnswerController extends Controller
{
	public function delete(Answer $answer)
	{
		Answer::where('id', $answer->id)->delete();
		return back()->withToastSuccess('Your topics Successfully deleted');
	}

	public function store(AnswerFormRequest $request, Topic $topic)
	{
		$topic->answers()->create([
			'user_id' => auth()->user()->id,
			'body' => $request['body']
		]);

		return back()->withToastSuccess('Your answer Successfully sent');
	}

	public function update(AnswerFormRequest $request, Answer $answer)
	{
		$answer->update(['body' => $request['body']]);
		return back()->withToastSuccess('Your answer Successfully updated');
	}
}
