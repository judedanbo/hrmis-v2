<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\CompanyPerson;
use App\Models\Dependant;
use App\Models\Document;
use App\Models\Person;
use App\Models\Position;
use App\Models\Qualification;
use App\Models\Rank;
use App\Models\RankCategory;
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
            'rank_id' => Rank::factory(),
            'rank_category_id' => RankCategory::factory(),
            'dependant_id' => Dependant::factory(),
            'qualification_id' => Qualification::factory(),
        ];
    }
}
