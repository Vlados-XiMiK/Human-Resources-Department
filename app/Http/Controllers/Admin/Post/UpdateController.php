<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Post\UpdateRequest;

use App\Models\PostAbout;
use Illuminate\Support\Facades\Storage;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request,  PostAbout $post)
    {
        $data = $request->validated();
        $post = $this->service->update($data, $post);

        return view('admin.post_abouts.post.show', compact('post'));
    }
}
