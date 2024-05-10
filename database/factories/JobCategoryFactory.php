<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\JobCategory;

class JobCategoryFactory extends Factory
{

    protected $model = JobCategory::class;

   
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
