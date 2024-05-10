<?php

namespace Database\Factories;

use App\Models\CompanyPerson;
use App\Models\CompanyPersonUnit;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyPersonUnitFactory extends Factory
{
    protected $model = CompanyPersonUnit::class;

    public function definition(): array
    {
        return [
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'remarks' => $this->faker->word(),
            'company_person_id' => CompanyPerson::factory(),
            'unit_id' => Unit::factory(),
        ];
    }
}
