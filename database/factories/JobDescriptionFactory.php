<?php

namespace Database\Factories;

use App\Models\JobDescription;
use App\Models\Rank;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobDescriptionFactory extends Factory
{
    protected $model = JobDescription::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(),
            'rank_id' => Rank::factory(),
        ];
    }
}
