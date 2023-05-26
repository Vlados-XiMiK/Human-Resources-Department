<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.post_abouts.post.create');
    }
}
