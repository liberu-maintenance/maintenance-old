<?php

namespace App\Http\Controllers\Opportunity\Admin;

use App\Forms\Builders\OpportunityForm;
use App\Http\Controllers\Controller;

class Create extends Controller
{
    public function __invoke(OpportunityForm $form)
    {
        return ['form' => $form->create()];
    }
}
