<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Company;
use App\Models\CompanyPerson;
use App\Models\Dependant;
use App\Models\Document;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\Note;
use App\Models\Person;
use App\Models\Position;
use App\Models\Qualification;
use App\Models\Unit;

class NoteFactory extends Factory
{

    protected $model = Note::class;

   
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'note' => $this->faker->text(),
            'person_id' => Person::factory(),
            'company_person_id' => CompanyPerson::factory(),
            'company_id' => Company::factory(),
            'unit_id' => Unit::factory(),
            'position_id' => Position::factory(),
            'job_id' => Job::factory(),
            'job_category_id' => JobCategory::factory(),
            'dependant_id' => Dependant::factory(),
            'qualification_id' => Qualification::factory(),
            'document_id' => Document::factory(),
        ];
    }
}
