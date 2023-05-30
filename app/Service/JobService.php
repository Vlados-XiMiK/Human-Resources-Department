<?php

namespace App\Service;

use App\Models\Job;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class JobService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

            Job::firstOrCreate($data);

            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $job)
    {
        try {
            DB::beginTransaction();
            if( array_key_exists('preview_image',$data)){
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }
            $job->update($data);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $job;
    }
}
