<?php

namespace App\Http\Controllers\Contact\Admin;

use App\Forms\Builders\ContactForm;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class Edit extends Controller
{
    public function __invoke(ContactForm $form ,Contact $contact)
    {
        return ['form' => $form->edit($contact)];
    }
}
