<?php

namespace App\Tables\Builders;

use App\Models\Opportunity;
use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Tables\Contracts\Table;

class OpportunityTable implements Table
{
    protected const TemplatePath = __DIR__ . '/../Templates/opportunity.json';

    public function query(): Builder
    {
        return Opportunity::selectRaw('
                        opportunities.opportunity_id, opportunities.deal_size, 
                        opportunities.stage, opportunities.closing_date
                    ');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
