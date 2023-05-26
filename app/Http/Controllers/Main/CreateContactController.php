<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

use App\Http\Requests\Main\CreateContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class CreateContactController extends Controller
{
    public function __invoke(CreateContactRequest $request)
    {
        $data = $request->validated();
        Contact::firstOrCreate($data);
        return redirect()->back()->with('success', 'Повідомлення успішно надіслано.');

    }
}
