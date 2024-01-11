<?php

namespace App\Http\Controllers\Note\Admin;

use App\Forms\Builders\NoteForm;
use App\Http\Controllers\Controller;
use App\Models\Note;

class Edit extends Controller
{
    
    public function __invoke(NoteForm $form, Note $note)
    {
        return ['form' => $form->edit($note)];
    }
}
