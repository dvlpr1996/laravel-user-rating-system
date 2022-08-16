<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
	public function index(Category $category)
	{
		$categories = $category->topics()->paginate(10);
		return view('categories', compact('category','categories'));
	}
}
