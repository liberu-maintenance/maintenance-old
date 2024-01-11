<?php

namespace App\Tables\Builders;

use App\Models\Note;
use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Tables\Contracts\Table;

class NoteTable implements Table
{
    protected const TemplatePath = __DIR__ . '/../Templates/note.json';

    public function query(): Builder
    {
        return Note::selectRaw('
                notes.note_id, notes.content, notes.contact_id, 
                notes.company_id, notes.opportunity_id
        ');

    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
