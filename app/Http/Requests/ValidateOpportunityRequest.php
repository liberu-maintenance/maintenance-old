<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateOpportunityRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $this->route('opportunity');

        return [
            'deal_size' => 'required',
            'stage' => 'required',
            'closing_date' => 'required',
        ];
    }
}
