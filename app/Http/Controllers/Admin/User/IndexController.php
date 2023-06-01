<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\PostAbout;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $posts = PostAbout::all();
        $users = User::all();
        return view('admin.user.index', compact('categories', 'posts', 'users'));
    }
}
