<?php

namespace App\Http\Controllers\Company\Admin;

use App\Forms\Builders\CompanyForm;
use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class Edit extends Controller
{
    
    public function __invoke(CompanyForm $form, Company $company)
    {
        return ['form' => $form->edit($company)];
    }
}
