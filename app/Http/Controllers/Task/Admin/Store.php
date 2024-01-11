<?php

namespace App\Http\Controllers\Task\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class Store extends Controller
{
    public function __invoke(ValidateTaskRequest $request, Task $task)
    {
        $task->fill($request->validated())->save();

        return [
            'message' => __('The task was successfully created'),
            'redirect' => 'task.admin.edit',
            'param' => ['task' => $task->task_id]
        ];
    }
}
