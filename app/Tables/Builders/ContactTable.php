<?php

namespace App\Tables\Builders;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Tables\Contracts\Table;

class ContactTable implements Table
{
    protected const TemplatePath = __DIR__ . '/../Templates/contact.json';

    public function query(): Builder
    {
        return Contact::selectRaw('
                 contacts.contact_id, contacts.cname, contacts.last_name, 
                 contacts.email, contacts.phone_number
            ');
    }
    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
