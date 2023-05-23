<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Vacancy\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\CategoryJob;
use Illuminate\Http\Request;

class UpdateCategoryController extends Controller
{
    public function __invoke(UpdateCategoryRequest $request,  CategoryJob $category_job)
    {
        $data = $request->validated();
        $category_job->update($data);
        return view('admin.vacancy.category.show', compact('category_job'));
    }
}
