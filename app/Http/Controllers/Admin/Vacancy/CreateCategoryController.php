<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CreateCategoryController extends Controller
{
    public function __invoke()
    {
        return view('admin.vacancy.category.create');
    }
}
