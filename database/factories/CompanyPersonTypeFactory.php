<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CompanyPersonType;

class CompanyPersonTypeFactory extends Factory
{

    protected $model = CompanyPersonType::class;

   
    public function definition(): array
    {
        return [
            'type' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
        ];
    }
}
