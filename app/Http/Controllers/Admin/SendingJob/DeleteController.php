<?php

namespace App\Http\Controllers\Admin\SendingJob;

use App\Http\Controllers\Controller;

use App\Models\SendingJob;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(SendingJob $sendingJob)
    {
        $sendingJob->delete();
        return redirect()->route('admin.sendingJob.index');
    }
}
