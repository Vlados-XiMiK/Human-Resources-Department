<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Post\UpdateRequest;

use App\Models\PostAbout;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,  PostAbout $post)
    {
        $data = $request->validated();
        $post->update($data);
        return view('admin.post_abouts.post.show', compact('post'));
    }
}
