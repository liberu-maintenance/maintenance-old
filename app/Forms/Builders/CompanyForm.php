<?php

namespace App\Forms\Builders;

use App\Models\Company;
use LaravelLiberu\Forms\Services\Form;

class CompanyForm
{
    protected const TemplatePath = __DIR__.'/../Templates/company.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Company $company)
    {
        return $this->form->edit($company);
    }

    public function TemplatePath()
    {
        return $this->form = new Form(static::TemplatePath);
    }

   
}
