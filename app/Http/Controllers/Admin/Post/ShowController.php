<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\PostAbout;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(PostAbout $post)
    {
        return view('admin.post_abouts.post.show', compact('post'));
    }
}
