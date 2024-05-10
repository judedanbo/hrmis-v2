<?php

namespace Database\Factories;

use App\Models\CompanyPerson;
use Illuminate\Database\Eloquent\Factories\Factory;

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
