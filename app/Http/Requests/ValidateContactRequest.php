<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateContactRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $this->route('contact');

        return [
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required|unique:contacts,phone_number ',
        ];
    }
}
