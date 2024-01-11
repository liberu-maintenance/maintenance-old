<?php

namespace App\Http\Controllers\Company\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class Index extends Controller
{
    
    public function __invoke(Request $request, Company $company)
    {
        $query = Company::query();

        if ($request->has('search')) {
            $query->where('name', 'like', '%'.$request->search.'%')
                    ->get();
        }

        return ['companies' => $query->paginate(10)];

    }
}
