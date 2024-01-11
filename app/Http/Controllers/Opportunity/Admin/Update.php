<?php

namespace App\Http\Controllers\Opportunity\Admin;

use App\Models\Opportunity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateOpportunityRequest;

class Update extends Controller
{
    
    public function __invoke(ValidateOpportunityRequest $request, Opportunity $opportunity)
    {
        $opportunity->update($request->validated());

        return [
            'message' => __('The Opportunity was successfully updated'),
            'redirect' => 'opportunity.admin.edit',
            'param' => ['opportunity' => $opportunity->opportunity_id]
        ];
    }
}
