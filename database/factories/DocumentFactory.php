<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\CompanyPerson;
use App\Models\Dependant;
use App\Models\Document;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\Person;
use App\Models\Position;
use App\Models\Qualification;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    protected $model = Document::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'file' => $this->faker->word(),
            'person_id' => Person::factory(),
            'company_person_id' => CompanyPerson::factory(),
            'company_id' => Company::factory(),
            'unit_id' => Unit::factory(),
            'position_id' => Position::factory(),
            'job_id' => Job::factory(),
            'job_category_id' => JobCategory::factory(),
            'dependant_id' => Dependant::factory(),
            'qualification_id' => Qualification::factory(),
        ];
    }
}
