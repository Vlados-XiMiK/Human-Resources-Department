<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;

use App\Models\PostAbout;


class DeleteController extends BaseController
{
    public function __invoke(PostAbout $post)
    {
        $post->delete();
        return redirect()->route('admin.About_us.index');
    }
}
