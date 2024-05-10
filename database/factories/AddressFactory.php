<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Address;
use App\Models\Company;
use App\Models\Person;

class AddressFactory extends Factory
{

    protected $model = Address::class;

   
    public function definition(): array
    {
        return [
            'address_line_1' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'address_line_2' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'city' => $this->faker->city(),
            'state' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'country' => $this->faker->country(),
            'zip_code' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'person_id' => Person::factory(),
            'company_id' => Company::factory(),
        ];
    }
}
