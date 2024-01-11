<?php

namespace App\Http\Controllers\Opportunity\Admin;

use App\Http\Controllers\Controller;
use App\Models\Opportunity;

class Show extends Controller
{
   
    public function __invoke(Opportunity $opportunity)
    {
        return ['opportunity' => $opportunity];
    }
}
