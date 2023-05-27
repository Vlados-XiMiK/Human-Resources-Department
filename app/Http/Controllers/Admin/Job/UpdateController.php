<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Job\UpdateRequest;

use App\Models\Job;
use App\Models\PostAbout;
use Illuminate\Support\Facades\Storage;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,  Job $job)
    {
        $data = $request->validated();

        if( array_key_exists('main_image',$data)){
            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
        }

        $job->update($data);
        return view('admin.vacancy.post.show', compact('job'));
    }
}
