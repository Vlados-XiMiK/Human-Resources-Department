<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\PostAbout;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(PostAbout $post)
    {
        $categories = Category::all();
        return view('admin.post_abouts.post.edit', compact('post', 'categories'));
    }
}
