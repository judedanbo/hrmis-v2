<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Contact;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition(): array
    {
        return [
            'contact_type' => $this->faker->regexify('[A-Za-z0-9]{4}'),
            'contact_value' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'person_id' => Person::factory(),
            'company_id' => Company::factory(),
        ];
    }
}
