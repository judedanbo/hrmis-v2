<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Company;
use App\Models\Unit;

class UnitFactory extends Factory
{

    protected $model = Unit::class;

   
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->regexify('[A-Za-z0-9]{4}'),
            'parent_unit' => Unit::factory()->create()->parent_unit,
            'company_id' => Company::factory(),
        ];
    }
}
