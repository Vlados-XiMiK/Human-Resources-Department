<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\PostAbout;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function __invoke()
    {
        $posts = PostAbout::paginate(6);
        return view('main.about', compact('posts'));
    }
}
