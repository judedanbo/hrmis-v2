<?php

namespace Database\Factories;

use App\Models\RankCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class RankCategoryFactory extends Factory
{
    protected $model = RankCategory::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
