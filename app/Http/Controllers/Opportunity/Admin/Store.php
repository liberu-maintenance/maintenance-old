<?php

namespace App\Http\Controllers\Opportunity\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateOpportunityRequest;
use App\Models\Opportunity;

class Store extends Controller
{
    
    public function __invoke(ValidateOpportunityRequest $request, Opportunity $opportunity)
    {
        $opportunity->fill($request->validated())->save();

        return [
            'message' => __('The Opportunity was successfully created'),
            'redirect' => 'opportunity.admin.edit',
            'param' => ['opportunity' => $opportunity->opportunity_id]
        ];
    }
    
}
