<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;

use App\Service\JobService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;

    public function __construct(JobService $jobService)
    {
        $this->service = $jobService;
    }
}
