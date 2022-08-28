<?php

namespace App\Observers;

use App\Models\Answer;

class AnswerObserver
{
	public function created(Answer $answer)
	{
		$answer->user->incrementXp(Answer::XP);
		$answer->user->incrementColumnCount('answer_count', 1);
	}

	public function deleted(Answer $answer)
	{
		$answer->user->decrementXp(Answer::XP);
		$answer->user->decrementColumnCount('answer_count', 1);
	}
}
