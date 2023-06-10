<?php

namespace App\Http\Controllers\Admin\SendingJob;

use App\Http\Controllers\Controller;
use App\Models\SendingJob;
use Illuminate\Support\Facades\Storage;

class SendingJobController extends Controller
{
    public function download($id)
    {
        $sendingJob = SendingJob::findOrFail($id);

        $filePath = $sendingJob->main_file; // Путь к файлу в базе данных

        if (Storage::exists($filePath)) {
            return Storage::download($filePath);
        } else {
            return ('Файл не найден.');

        }
    }
}
