<?php

namespace App\Forms\Builders;

use App\Models\Opportunity;
use LaravelLiberu\Forms\Services\Form;

class OpportunityForm
{
    protected const TemplatePath = __DIR__.'/../Templates/opportunity.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Opportunity $opportunity)
    {
        return $this->form->edit($opportunity);
    }

    public function TemplatePath()
    {
        return $this->form = new Form(static::TemplatePath);
    }

   
}
