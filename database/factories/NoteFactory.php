<?php

namespace Database\Factories;

use App\Models\Note;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Opportunity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    protected $model = Note::class;

    public function definition(): array
    {
        return [
            'content' => $this->faker->paragraph(5),
            'contact_id' => Contact::inRandomOrder()->first()->id,
            'company_id' => Company::inRandomOrder()->first()->id,
            'opportunity_id' => Opportunity::inRandomOrder()->first()->id,
        ];
    }
}
