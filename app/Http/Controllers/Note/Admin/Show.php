<?php

namespace App\Http\Controllers\Note\Admin;

use App\Http\Controllers\Controller;
use App\Models\Note;

class Show extends Controller
{
    public function __invoke(Note $note)
    {
        return ['note' => $note];
    }
}
