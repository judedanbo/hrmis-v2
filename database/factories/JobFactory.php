<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Company;
use App\Models\Job;
use App\Models\JobCategory;

class JobFactory extends Factory
{

    protected $model = Job::class;

   
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'type' => $this->faker->regexify('[A-Za-z0-9]{4}'),
            'next_job' => Job::factory()->create()->next_job,
            'company_id' => Company::factory(),
            'job_category_id' => JobCategory::factory(),
        ];
    }
}
