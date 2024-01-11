<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Opportunity>
 */
class OpportunityFactory extends Factory
{
    protected $model = Opportunity::class;

    public function definition(): array
    {
        return [
            'deal_size' => $this->faker->randomFloat(2, 1000, 100000),
            'stage' => $this->faker->randomElement(['Prospecting', 'Qualification', 'Proposal', 'Negotiation', 'Closed Won', 'Closed Lost']),
            'closing_date' => $this->faker->dateTimeBetween('now', '+1 year'),
        ];
    }
}
