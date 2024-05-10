<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Position;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

class PositionFactory extends Factory
{
    protected $model = Position::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'type' => $this->faker->regexify('[A-Za-z0-9]{4}'),
            'report_to' => Position::factory(),
            'unit_id' => Unit::factory(),
            'company_id' => Company::factory(),
        ];
    }
}
