<?php

namespace App\Forms\Builders;

use App\Models\Task;
use LaravelLiberu\Forms\Services\Form;

class TaskForm
{
    protected const TemplatePath = __DIR__ . '/../Templates/task.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Task $task)
    {
        return $this->form->edit($task);
    }

    public function TemplatePath()
    {
        return $this->form = new Form(static::TemplatePath);
    }
}
