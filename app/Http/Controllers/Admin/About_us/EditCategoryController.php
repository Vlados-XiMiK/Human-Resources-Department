<?php

namespace App\Http\Controllers\Admin\About_us;

use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;

class EditCategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        return view('admin.post_abouts.categories.edit', compact('category'));
    }
}
