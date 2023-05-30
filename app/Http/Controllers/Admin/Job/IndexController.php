<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;

use App\Models\Job;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $jobs = Job::all();
        return view('admin.vacancy.index', compact('jobs'));
    }
}
