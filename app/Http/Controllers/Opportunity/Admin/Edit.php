<?php

namespace App\Http\Controllers\Opportunity\Admin;

use App\Forms\Builders\OpportunityForm;
use App\Http\Controllers\Controller;
use App\Models\Opportunity;
use Illuminate\Http\Request;

class Edit extends Controller
{
    public function __invoke(OpportunityForm $form, Opportunity $opportunity)
    {
        return ['form' => $form->edit($opportunity)];
    }
  
}
