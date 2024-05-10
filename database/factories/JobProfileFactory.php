<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Job;
use App\Models\JobProfile;

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
