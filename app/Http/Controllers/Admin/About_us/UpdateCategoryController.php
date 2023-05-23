<?php

namespace App\Http\Controllers\Admin\About_us;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\About_us\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class UpdateCategoryController extends Controller
{
    public function __invoke(UpdateCategoryRequest $request,  Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        return view('admin.post_abouts.category.show', compact('category'));
    }
}
