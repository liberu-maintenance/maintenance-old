<?php

namespace App\Http\Controllers\Contact\Admin;

use App\Forms\Builders\ContactForm;
use App\Http\Controllers\Controller;

class Create extends Controller
{
    
    public function __invoke(ContactForm $form)
    {
        return ['form' => $form->create()];
    }
}
