<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Job\StoreRequest;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
        Job::firstOrCreate($data);

        return redirect()->route('admin.job.index');
    }
}
