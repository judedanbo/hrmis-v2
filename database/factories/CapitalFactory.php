<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Capital;

class CapitalFactory extends Factory
{

    protected $model = Capital::class;

   
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
