<?php

namespace App\Http\Controllers\Task\Admin;

use App\Forms\Builders\TaskForm;
use App\Http\Controllers\Controller;

class Create extends Controller
{
    public function __invoke(TaskForm $form)
    {
        return ['form' => $form->create()];
    }
    
}
