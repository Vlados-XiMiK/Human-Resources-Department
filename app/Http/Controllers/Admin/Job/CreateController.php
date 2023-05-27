<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;

use App\Models\CategoryJob;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $category_jobs = CategoryJob::all();
        return view('admin.vacancy.post.create', compact('category_jobs'));
    }
}
