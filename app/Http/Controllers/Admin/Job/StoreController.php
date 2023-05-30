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
        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

        Job::firstOrCreate($data);

        return redirect()->route('admin.Vacancy.index');
    }
}
