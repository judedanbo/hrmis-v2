<?php

namespace Database\Factories;

use App\Models\CompanyPerson;
use App\Models\CompanyPersonJob;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyPersonJobFactory extends Factory
{
    protected $model = CompanyPersonJob::class;

    public function definition(): array
    {
        return [
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'remarks' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'company_person_id' => CompanyPerson::factory(),
            'job_id' => Job::factory(),
        ];
    }
}
