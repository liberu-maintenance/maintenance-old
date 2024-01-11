<?php

namespace App\Tables\Builders;

use App\Models\Company;
use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Tables\Contracts\Table;

class CompanyTable implements Table
{
    protected const TemplatePath = __DIR__ . '/../Templates/company.json';

    public function query(): Builder
    {
        return Company::selectRaw('
                        companies.company_id, companies.name, companies.address, 
                        companies.city, companies.state, companies.zip, 
                        companies.phone_number, companies.website, companies.industry,
                        companies.description
                    ');
    }
    
    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
