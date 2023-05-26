<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Post\UpdateRequest;

use App\Models\PostAbout;
use Illuminate\Support\Facades\Storage;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,  PostAbout $post)
    {
        $data = $request->validated();

        if( array_key_exists('main_image',$data)){
            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
        }

        $post->update($data);
        return view('admin.post_abouts.post.show', compact('post'));
    }
}
