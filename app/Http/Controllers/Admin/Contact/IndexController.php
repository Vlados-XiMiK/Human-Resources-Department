<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;

use App\Models\Contact;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $contacts = Contact::all();
        return view('admin.message.index', compact('contacts'));
    }
}
