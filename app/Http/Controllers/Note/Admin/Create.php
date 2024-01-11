<?php

namespace App\Http\Controllers\Note\Admin;

use App\Forms\Builders\NoteForm;
use App\Http\Controllers\Controller;

class Create extends Controller
{
    public function __invoke(NoteForm $form)
    {
        return ['form' => $form->create()];   
    }
}
