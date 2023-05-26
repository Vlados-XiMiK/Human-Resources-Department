<?php

namespace App\Http\Controllers\Admin\About_us;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\PostAbout;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $posts = PostAbout::all();
        return view('admin.post_abouts.index', compact('categories', 'posts'));
    }
}
