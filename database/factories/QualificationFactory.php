<?php

namespace Database\Factories;

use App\Models\Person;
use App\Models\Qualification;
use Illuminate\Database\Eloquent\Factories\Factory;

class QualificationFactory extends Factory
{
    protected $model = Qualification::class;

    public function definition(): array
    {
        return [
            'institution' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'course' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'qualification' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'qualification_number' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'level' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'year_completed' => $this->faker->regexify('[A-Za-z0-9]{4}'),
            'person_id' => Person::factory(),
        ];
    }
}
