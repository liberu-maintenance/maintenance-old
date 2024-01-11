<?php

namespace App\Http\Controllers\Note\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateNoteRequest;
use App\Models\Note;

class Store extends Controller
{
    public function __invoke(ValidateNoteRequest $request, Note $note)
    {
        $note->fill($request->validated())->save();

        return [
            'message' => __('The Note was successfully created'),
            'redirect' => 'note.admin.edit',
            'param' =>  ['note' => $note->note_id]
        ];
    }
}
