<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;

use App\Models\Job;


class DeleteController extends Controller
{
    public function __invoke(Job $job)
    {
        $job->delete();
        return redirect()->route('admin.Vacancy.index');
    }
}
