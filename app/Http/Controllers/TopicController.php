<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Category;
use App\Models\User_Stats;
use Illuminate\Http\Request;

class TopicController extends Controller
{
	public function index()
	{
		$topics = Topic::all();
		$user_stats = 	User_Stats::select('user_id', 'xp')->get();
		$categories = Category::select(['name', 'slug', 'icon'])->get();
		
		return view('topics.index', compact(
			'categories',
			'topics',
			'user_stats'
		));
	}

	public function show(Topic $topic)
	{
		return view('topics.details', compact('topic'));
	}
}
