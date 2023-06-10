<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Http\Controllers\Controller;

use App\Models\CategoryJob;
use Illuminate\Http\Request;

class ShowCategoryController extends Controller
{
    public function __invoke(CategoryJob $category_job)
    {

        return view('admin.vacancy.category.show', compact('category_job'));
    }
}
