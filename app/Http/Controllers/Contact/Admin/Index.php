<?php

namespace App\Http\Controllers\Contact\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function __invoke(Request $request)
    {
        $query = Contact::query();

        if ($request->has('search')) {
            $query->where('name', 'like', '%'.$request->search.'%')
                    -> orWhere('email', 'like', '%'.$request->search.'%')
                    -> orWhere('phone_number', 'like', '%'.$request->search.'%')
                    ->get();
        }

        return ['contacts' => $query->paginate(10)];
    }
}
