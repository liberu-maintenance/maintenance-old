<?php

namespace App\Http\Controllers\Task\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;

class Destroy extends Controller
{
    public function __invoke(Task $task)
    {
        $task->delete();

        return [
            'message' => __('The task was successfully deleted'),
            'redirect' => 'task.index',
        ];
    }
}
