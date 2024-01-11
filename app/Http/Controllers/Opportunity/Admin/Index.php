<?php

namespace App\Http\Controllers\Opportunity\Admin;

use App\Models\Opportunity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Index extends Controller
{
    public function __invoke(Request $request)
    {
        $query = Opportunity::query();

        if ($request->has('search')) {
            $query->where('deal_size', 'like', '%' . $request->search . '%')
                ->orWhere('stage', 'like', '%' . $request->search . '%')
                ->get();
        }

        return ['opportunities' => $query->paginate(10)];
    }
}
