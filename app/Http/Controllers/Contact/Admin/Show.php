<?php

namespace App\Http\Controllers\Contact\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class Show extends Controller
{
    public function __invoke(Contact $contact)
    {
        return ['contact' => $contact];
    }
}
