<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\PostAbout;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        PostAbout::firstOrCreate($data);

        return redirect()->route('admin.About_us.index');
    }
}
