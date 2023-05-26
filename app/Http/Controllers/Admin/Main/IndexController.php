<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;

use App\Models\Contact;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $contacts = Contact::all();
        $messageCount = count($contacts);
        return view('admin.main.index', compact('messageCount'));
    }
}
