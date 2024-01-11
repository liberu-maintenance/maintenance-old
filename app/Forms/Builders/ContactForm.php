<?php

namespace App\Forms\Builders;

use App\Models\Contact;
use LaravelLiberu\Forms\Services\Form;

class ContactForm
{
    protected const TemplatePath = __DIR__.'/../Templates/contact.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Contact $contact)
    {
        return $this->form->edit($contact);
    }

    public function TemplatePath()
    {
        return $this->form = new Form(static::TemplatePath);
    }

   
}
