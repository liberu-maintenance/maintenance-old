<?php

namespace App\Http\Controllers\Opportunity\Admin;

use App\Http\Controllers\Controller;
use App\Models\Opportunity;

class Destroy extends Controller
{
    public function __invoke(Opportunity $opportunity)
    {
        $opportunity->delete();

        return [
            'message' => __('The opportunity was successfully deleted'),
            'redirect' => 'opportunity.admin.index',
        ];
    }
}
