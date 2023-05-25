<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;

use App\Models\Contact;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Contact $contact)
    {
        return view('admin.message.show', compact('contact'));
    }
}
