<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Rank;
use App\Models\RankCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class RankFactory extends Factory
{
    protected $model = Rank::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'type' => $this->faker->regexify('[A-Za-z0-9]{4}'),
            'job_id' => Rank::factory(),
            'company_id' => Company::factory(),
            'rank_category_id' => RankCategory::factory(),
        ];
    }
}
