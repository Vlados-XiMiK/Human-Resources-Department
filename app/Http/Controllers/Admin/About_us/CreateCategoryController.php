<?php

namespace App\Http\Controllers\Admin\About_us;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CreateCategoryController extends Controller
{
    public function __invoke()
    {
        return view('admin.post_abouts.categories.create');
    }
}
