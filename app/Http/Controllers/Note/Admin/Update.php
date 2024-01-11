<?php

namespace App\Http\Controllers\Note\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateNoteRequest;
use App\Models\Note;

class Update extends Controller
{
    public function __invoke(ValidateNoteRequest $request, Note $note)
    {
        $note->update($request->validated());

        return [
            'message' => __('The Note was successfully updated'),
            'redirect' => 'note.admin.edit',
            'param' =>  ['note' => $note->note_id]
        ];
    }
}
