<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\District;
use App\Models\Region;

class DistrictFactory extends Factory
{

    protected $model = District::class;

   
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'region_id' => Region::factory(),
        ];
    }
}
