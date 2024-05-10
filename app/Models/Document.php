<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'file',
        'person_id',
        'company_person_id',
        'company_id',
        'unit_id',
        'position_id',
        'job_id',
        'job_category_id',
        'dependant_id',
        'qualification_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'person_id' => 'integer',
        'company_person_id' => 'integer',
        'company_id' => 'integer',
        'unit_id' => 'integer',
        'position_id' => 'integer',
        'job_id' => 'integer',
        'job_category_id' => 'integer',
        'dependant_id' => 'integer',
        'qualification_id' => 'integer',
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    public function companyPerson(): BelongsTo
    {
        return $this->belongsTo(CompanyPerson::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }

    public function jobCategory(): BelongsTo
    {
        return $this->belongsTo(JobCategory::class);
    }

    public function dependant(): BelongsTo
    {
        return $this->belongsTo(Dependant::class);
    }

    public function qualification(): BelongsTo
    {
        return $this->belongsTo(Qualification::class);
    }

    public function notes(): HasMany
    {
        return $this->hasMany(Note::class);
    }
}
