<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Opportunity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'name' => $this->faker->name($gender),
            'description' => $this->faker->paragraph(5),
            'due_date' => $this->faker->date,
            'status' => $this->faker->randomElement(['pending', 'in_progress', 'completed']),
            'contact_id' => Contact::inRandomOrder()->first()->contact_id,
            'company_id' => Company::inRandomOrder()->first()->company_id,
            'opportunity_id' => Opportunity::inRandomOrder()->first()->opportunity_id,
        ];
    }
}
