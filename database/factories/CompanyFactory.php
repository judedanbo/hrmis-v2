<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Company;

class CompanyFactory extends Factory
{

    protected $model = Company::class;

   
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'registration_number' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'type' => $this->faker->regexify('[A-Za-z0-9]{4}'),
        ];
    }
}
