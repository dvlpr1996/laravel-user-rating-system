<?php

namespace App\Observers;

use App\Models\Topic;
use App\Models\Answer;

class TopicObserver
{
	public function created(Topic $topic)
	{
		$topic->user->incrementXp(Topic::XP);
		$topic->user->incrementColumnCount('topic_count', 1);
	}

	public function deleted(Topic $topic)
	{
		$topic->user->decrementXp(Topic::XP);
		$topic->user->decrementColumnCount('topic_count', 1);
		$topic->user->decrementXp(Answer::XP);
		$topic->user->decrementColumnCount('answer_count', 1);
	}
}
