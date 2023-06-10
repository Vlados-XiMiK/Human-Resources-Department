<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

use App\Http\Requests\Main\CreateSendingJobRequest;
use App\Models\SendingJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CreateSendingJobController extends Controller
{
    public function __invoke(CreateSendingJobRequest $request)
    {
        $data = $request->validated();
        $data['main_file'] = Storage::put('/files', $data['main_file']);
        SendingJob::firstOrCreate($data);
        return redirect()->back()->with('success', 'Повідомлення успішно надіслано.');

    }
}
