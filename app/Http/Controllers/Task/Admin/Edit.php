<?php

namespace App\Http\Controllers\Task\Admin;

use App\Forms\Builders\TaskForm;
use App\Http\Controllers\Controller;
use App\Models\Task;

class Edit extends Controller
{
    public function __invoke(TaskForm $form, Task $task)
    {
        return ['form' => $form->edit($task)];
    }
    
}
