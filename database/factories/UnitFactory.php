<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

class UnitFactory extends Factory
{
    protected $model = Unit::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->regexify('[A-Za-z0-9]{4}'),
            'unit_id' => Unit::factory(),
            'company_id' => Company::factory(),
        ];
    }
}
