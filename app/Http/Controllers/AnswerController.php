<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
	public function delete(Answer $answer)
	{
		Answer::where('id', $answer->id)->delete();
		return back()->withToastSuccess('Your topics Successfully deleted');
	}

	public function store(Request $request, Topic $topic)
	{
		$validated = $request->validate([
			'body'  => ['required', 'string', 'min:2', 'max:1024'],
		]);

		$topic->answers()->create([
			'user_id' => auth()->user()->id,
			'body' => $validated['body']
		]);

		return back()->withToastSuccess('Your answer Successfully sent');
	}
}
