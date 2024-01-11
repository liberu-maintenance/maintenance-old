<?php

namespace App\Http\Controllers\Contact\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class Destroy extends Controller
{
    public function __invoke(Contact $contact)
    {
        $contact->delete();

        return ['message' => __('The contact was successfully deleted')];
    }
}
