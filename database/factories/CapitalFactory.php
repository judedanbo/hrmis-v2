<?php

namespace Database\Factories;

use App\Models\Capital;
use Illuminate\Database\Eloquent\Factories\Factory;

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
