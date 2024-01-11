<?php

namespace App\Tables\Builders;

use App\Models\Task;
use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Tables\Contracts\Table;

class TaskTable implements Table
{
    protected const TemplatePath = __DIR__ . '/../Templates/task.json';

    public function query(): Builder
    {

        return Task::selectRaw('
                        tasks.task_id, tasks.description, tasks.due_date, 
                        tasks.status, tasks.priority, tasks.contact_id, 
                        tasks.company_id, tasks.opportunity_id
        ');
    }


    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
