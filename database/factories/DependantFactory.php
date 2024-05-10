<?php

namespace Database\Factories;

use App\Models\CompanyPerson;
use App\Models\Dependant;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class DependantFactory extends Factory
{
    protected $model = Dependant::class;

    public function definition(): array
    {
        return [
            'relation' => $this->faker->word(),
            'person_id' => Person::factory(),
            'company_person_id' => CompanyPerson::factory(),
        ];
    }
}
