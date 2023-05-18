<?php

namespace App\Http\Controllers\Admin\About_us;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\About_us\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class DeleteCategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.About_us.index');
    }
}
