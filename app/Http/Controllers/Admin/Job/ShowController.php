<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;

use App\Models\CategoryJob;
use App\Models\Job;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Job $job)
    {
        $category_jobs = CategoryJob::all();
        return view('admin.vacancy.post.show', compact('job', 'category_jobs'));
    }
}
