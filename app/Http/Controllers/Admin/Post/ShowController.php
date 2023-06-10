<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\PostAbout;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(PostAbout $post)
    {
        $categories = Category::all();
        $category = $post->category ? $post->category->title : 'Без категорії';
        return view('admin.post_abouts.post.show', compact('post', 'categories', 'category'));
    }
}
