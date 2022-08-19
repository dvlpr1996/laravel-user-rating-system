<?php

namespace App\Http\Controllers;

use App\Models\Answer;

class AnswerController extends Controller
{
	public function delete(Answer $answer)
	{
		Answer::where('id', $answer->id)->delete();
		return back()->withToastSuccess('Your topics Successfully deleted');
	}

}
