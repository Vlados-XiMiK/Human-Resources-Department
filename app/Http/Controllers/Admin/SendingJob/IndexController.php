<?php

namespace App\Http\Controllers\Admin\SendingJob;

use App\Http\Controllers\Controller;
use App\Models\SendingJob;

class IndexController extends Controller
{
    public function __invoke()
    {
        $sendingJob = SendingJob::all();
        return view('admin.sending_job.index', compact('sendingJob'));
    }
}
