<?php

namespace App\Http\Controllers\Task\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;

class Show extends Controller
{
    public function __invoke(Task $task)
    {
        return ['task' => $task];
    }
}
