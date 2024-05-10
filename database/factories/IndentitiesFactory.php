<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Indentities;
use App\Models\Person;

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
