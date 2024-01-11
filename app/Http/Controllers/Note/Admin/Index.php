<?php

namespace App\Http\Controllers\Note\Admin;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function __invoke(Request $request)
    {
        $query = Note::query();

        if ($request->has('search')) {
            $query->where('content', 'like', '%' . $request->search . '%')
                ->get();
        }

        return ['notes' => $query->paginate(10)];
    }
}
