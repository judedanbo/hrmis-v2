<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Person;

class PersonFactory extends Factory
{

    protected $model = Person::class;

   
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'other_name' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'surname' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'date_of_birth' => $this->faker->date(),
        ];
    }
}
