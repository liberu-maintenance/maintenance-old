<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateNoteRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $this->route('note');

        return [
            'content' => 'required',
            'contact_id' =>'nullable|exists:contacts,contact_id',
            'company_id' => 'nullable|exists:companies,company_id',
            'opportunity_id' => 'nullable|exists:opportunities,opportunity_id',
        ];
    }
}
