<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\About_us\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\CategoryJob;
use Illuminate\Http\Request;

class DeleteCategoryController extends Controller
{
    public function __invoke(CategoryJob $category_job)
    {
        $category_job->delete();
        return redirect()->route('admin.Vacancy.index');
    }
}
