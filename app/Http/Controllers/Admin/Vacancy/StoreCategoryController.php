<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Vacancy\StoreCategoryRequest;
use App\Models\Category;
use App\Models\CategoryJob;
use Illuminate\Http\Request;

class StoreCategoryController extends Controller
{
    public function __invoke(StoreCategoryRequest $request)
    {
        $data = $request->validated();
        CategoryJob::firstOrCreate($data);

        return redirect()->route('admin.Vacancy.index');
    }
}
