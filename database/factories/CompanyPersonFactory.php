<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CompanyPerson;

class CompanyPersonFactory extends Factory
{

    protected $model = CompanyPerson::class;

   
    public function definition(): array
    {
        return [
            'file_number' => $this->faker->regexify('[A-Za-z0-9]{12}'),
            'staff_number' => $this->faker->regexify('[A-Za-z0-9]{12}'),
            'old_staff_number' => $this->faker->regexify('[A-Za-z0-9]{12}'),
            'hire_date' => $this->faker->date(),
            'exit_date' => $this->faker->date(),
        ];
    }
}
