<?php

namespace App\Http\Controllers\Contact\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateContactRequest;
use App\Models\Contact;

class Store extends Controller
{
    
    public function __invoke(ValidateContactRequest $request, Contact $contact)
    {
        $contact->fill($request->validated())->save();

        return [
            'message' => __('The Contact was successfully created'),
            'redirect' => 'note.admin.edit',
            'param' =>  ['contact' => $contact->contact_id]
        ];
    }
}
