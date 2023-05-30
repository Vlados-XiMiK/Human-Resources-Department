<?php

namespace App\Service;

use App\Models\PostAbout;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
        $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
        PostAbout::firstOrCreate($data);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $post)
    {
        try {
            DB::beginTransaction();

        if( array_key_exists('main_image',$data)){
            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
        }

        $post->update($data);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $post;
    }
}
