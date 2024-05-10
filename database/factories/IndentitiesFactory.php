<?php

namespace Database\Factories;

use App\Models\Indentities;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class IndentitiesFactory extends Factory
{
    protected $model = Indentities::class;

    public function definition(): array
    {
        return [
            'type' => $this->faker->regexify('[A-Za-z0-9]{4}'),
            'number' => $this->faker->word(),
            'person_id' => Person::factory(),
        ];
    }
}
