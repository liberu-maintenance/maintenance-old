<?php

namespace App\Http\Controllers\Task\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateTaskRequest;
use App\Models\Task;

class Update extends Controller
{
    public function __invoke(ValidateTaskRequest $request, Task $task)
    {
        $task->update($request->validated());

        return [
            'message' => __('The task was successfully updated'),
            'redirect' => 'task.index',
        ];
    }
    
}
