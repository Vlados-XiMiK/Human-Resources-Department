<?php

namespace App\Http\Controllers\Admin\SendingJob;

use App\Http\Controllers\Controller;

use App\Models\SendingJob;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(SendingJob $sendingJob)
    {
        return view('admin.sending_job.show', compact('sendingJob'));
    }
}
