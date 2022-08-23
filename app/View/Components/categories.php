<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class categories extends Component
{
    public $categories;

    public function __construct()
    {
			$this->categories = Category::select(['name', 'slug', 'icon'])->get();
    }

    public function render()
    {
        return view('components.categories');
    }
}
