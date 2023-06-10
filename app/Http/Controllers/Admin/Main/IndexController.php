<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;

use App\Models\Contact;
use App\Models\SendingJob;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $contacts = Contact::all();
        $sendingJobs = SendingJob::all();
        $messageCount = count($contacts);
        $jobsCount = count($sendingJobs);
        return view('admin.main.index', compact('messageCount', 'sendingJobs', 'jobsCount'));
    }
}
