<?php

namespace App\Http\Controllers\Company\Admin;

use App\Models\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateCompanyRequest;

class Update extends Controller
{
    
    public function __invoke(ValidateCompanyRequest $request, Company $company)
    {
        $company->update($request->validated());

        return ['message' => __('The company was successfully updated')];
    }
}
