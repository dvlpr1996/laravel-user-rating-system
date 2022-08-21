<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Answer;
use App\Models\Category;
use App\Models\User_Stats;
use Illuminate\Http\Request;

class TopicController extends Controller
{
	public function index()
	{
		$user_stats = 	User_Stats::select('user_id', 'xp')->get();
		return view('topics.index', compact('user_stats'));
	}

	public function show(Topic $topic)
	{
		$answers = $topic->answers()->paginate(10);
		return view('topics.details', compact('topic', 'answers'));
	}

	public function delete(Topic $topic)
	{
		Topic::where('id', $topic->id)->delete();
		return back()->withToastSuccess('Your topics Successfully deleted');
	}
}
