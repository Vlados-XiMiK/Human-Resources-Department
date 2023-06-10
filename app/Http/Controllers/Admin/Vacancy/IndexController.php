<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\CategoryJob;
use App\Models\Job;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $category_jobs = CategoryJob::all();
        $jobs = Job::all();
        return view('admin.vacancy.index', compact('category_jobs', 'jobs'));
    }
}
