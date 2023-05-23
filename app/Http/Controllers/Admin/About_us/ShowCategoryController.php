<?php

namespace App\Http\Controllers\Admin\About_us;

use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;

class ShowCategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        return view('admin.post_abouts.category.show', compact('category'));
    }
}
