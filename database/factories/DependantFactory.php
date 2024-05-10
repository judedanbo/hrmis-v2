<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CompanyPerson;
use App\Models\Dependant;
use App\Models\Person;

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
