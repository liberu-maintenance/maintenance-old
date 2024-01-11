<?php

namespace App\Forms\Builders;

use App\Models\Note;
use LaravelLiberu\Forms\Services\Form;

class NoteForm
{
    protected const TemplatePath = __DIR__.'/../Templates/note.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Note $note)
    {
        return $this->form->edit($note);
    }

    public function TemplatePath()
    {
        return $this->form = new Form(static::TemplatePath);
    }
}
