<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;

use App\Models\PostAbout;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $post_abouts = PostAbout::all();
        return view('admin.post_abouts.index', compact('post_abouts'));
    }
}
