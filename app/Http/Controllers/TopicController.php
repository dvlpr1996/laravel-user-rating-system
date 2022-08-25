<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Category;
use App\Models\User_Stats;
use App\Http\Requests\TopicFormRequest;

class TopicController extends Controller
{
	public function index()
	{
		$user_stats = User_Stats::select('user_id', 'xp');
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
		return redirect()->route('topics.index')->withToastSuccess('Your topics Successfully deleted');
	}

	public function create()
	{
		$categories = Category::select(['id', 'name', 'slug'])->get();
		return view('topics.create', compact('categories'));
	}

	public function store(TopicFormRequest $request)
	{
		$topic = auth()->user()->topics()->create($request->all());
		return redirect()->route('topics.show', $topic)
			->withToastSuccess('Your topics Successfully created');
	}

	public function update(TopicFormRequest $request, Topic $topic)
	{
		$topic->update([
			'user_id' => auth()->user()->id,
			'title' => $request->title,
			'body' => $request->body,
			'category_id' => $request->category_id
		]);

		return redirect()->route('topics.show', $topic->id)
			->withToastSuccess('Your topics Successfully updated');
	}

	public function edit(Topic $topic)
	{
		$categories = Category::select(['id', 'name', 'slug'])->get();
		return view('topics.edit', compact('categories', 'topic'));
	}
}
