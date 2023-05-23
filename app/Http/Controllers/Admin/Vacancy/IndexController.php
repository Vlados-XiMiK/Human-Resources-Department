<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\CategoryJob;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $category_job = CategoryJob::all();
        return view('admin.vacancy.index', compact('category_job'));
    }
}
