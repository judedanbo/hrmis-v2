<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\JobProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobProfileFactory extends Factory
{
    protected $model = JobProfile::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(),
            'job_id' => Job::factory(),
        ];
    }
}
