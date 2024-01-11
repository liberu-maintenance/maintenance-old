<?php

namespace App\Http\Controllers\Note\Admin;

use App\Http\Controllers\Controller;
use App\Models\Note;

class Destroy extends Controller
{
    public function __invoke(Note $note)
    {
        $note->delete();

        return [
            'message' => __('The note was successfully deleted'),
            'redirect' => 'note.admin.index',
        ];
    }
}
