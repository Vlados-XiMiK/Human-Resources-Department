<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobPageController extends Controller
{
    public function __invoke()
    {
        $jobs = Job::paginate(6);
        return view('main.job', compact('jobs'));
    }
}
