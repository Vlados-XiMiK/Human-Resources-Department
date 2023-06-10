<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Job\UpdateRequest;

use App\Models\CategoryJob;
use App\Models\Job;
use App\Models\PostAbout;
use Illuminate\Support\Facades\Storage;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request,  Job $job)
    {
        $data = $request->validated();
        $job = $this->service->update($data, $job);
        $category_jobs = CategoryJob::all();
        $categoryTitle = $job->category_job ? $job->category_job->title : "Без категорії";

        return view('admin.vacancy.post.show', compact('job', 'category_jobs', 'categoryTitle'));
    }
}
