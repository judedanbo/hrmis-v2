<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Status;

class StatusFactory extends Factory
{

    protected $model = Status::class;

   
    public function definition(): array
    {
        return [
            'type' => $this->faker->regexify('[A-Za-z0-9]{4}'),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'description' => $this->faker->text(),
        ];
    }
}