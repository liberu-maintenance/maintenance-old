<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateTaskRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $this->route();

        return [
            'name' => 'required',
            'description' => 'required',
            'due_date' => 'required',
            'status' => 'required',
            'contact_id' => 'exists:contacts,contact_id',
            'company_id' =>'exists:companies,company_id',
            'opportunity_id' => 'exists:opportunities,opportunity_id',
        ];
    }
}
