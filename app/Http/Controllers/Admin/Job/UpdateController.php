<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Job\UpdateRequest;

use App\Models\Job;
use App\Models\PostAbout;
use Illuminate\Support\Facades\Storage;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request,  Job $job)
    {
        $data = $request->validated();
        $job = $this->service->update($data, $job);

        return view('admin.vacancy.post.show', compact('job'));
    }
}
