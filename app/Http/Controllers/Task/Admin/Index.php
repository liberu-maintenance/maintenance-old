<?php

namespace App\Http\Controllers\Task\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class Index extends Controller
{
   
    public function __invoke(Request $request)
    {
        $query = Task::query();

        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%')
                ->get();
        }

        return ['tasks' => $query->paginate(10)];
    }
}
