<?php

namespace Database\Factories;

use App\Models\JobProfile;
use App\Models\Rank;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobProfileFactory extends Factory
{
    protected $model = JobProfile::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(),
            'rank_id' => Rank::factory(),
        ];
    }
}
