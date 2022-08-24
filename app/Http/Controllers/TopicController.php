<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Category;
use App\Models\User_Stats;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TopicController extends Controller
{
	public function index()
	{
		$user_stats = 	User_Stats::select('user_id', 'xp');
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

	public function create()
	{
		$categories = Category::select(['id', 'name', 'slug'])->get();
		return view('topics.create', compact('categories'));
	}

	public function store(Request $request)
	{
		$validated = $request->validate([
			'title' => ['required', 'string', 'min:4', 'max:64'],
			'category_id' => ['required', Rule::in(['1', '2', '3', '4', '5', '6', '7'])],
			'body'  => ['required', 'string', 'min:4', 'max:1024'],
		]);

		$topic = auth()->user()->topics()->create($validated);
		return redirect()->route('topics.show', $topic)
			->withToastSuccess('Your topics Successfully created');
	}
}
