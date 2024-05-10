<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyPerson extends Pivot
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'file_number',
        'staff_number',
        'old_staff_number',
        'hire_date',
        'exit_date',
    ];

    protected $casts = [
        'id' => 'integer',
        'hire_date' => 'date',
        'exit_date' => 'date',
    ];

    public function people(): BelongsToMany
    {
        return $this->belongsToMany(Person::class);
    }

    public function companies(): BelongsToMany
    {
        return $this->belongsToMany(Company::class);
    }

    public function units(): BelongsToMany
    {
        return $this->belongsToMany(Unit::class)
            ->using(CompanyPersonUnit::class)
            ->as('company_person_unit')
            ->withPivot('id', 'start_date', 'end_date', 'remarks', 'company_person_id', 'unit_id')
            ->withTimestamps();
    }

    public function positions(): BelongsToMany
    {
        return $this->belongsToMany(Position::class);
    }

    public function jobs(): BelongsToMany
    {
        return $this->belongsToMany(Job::class)
            ->using(CompanyPersonJob::class)
            ->as('company_person_job')
            ->withPivot('id', 'start_date', 'end_date', 'remarks', 'company_person_id', 'job_id')
            ->withTimestamps();
    }

    public function companyPersonTypes(): BelongsToMany
    {
        return $this->belongsToMany(CompanyPersonType::class);
    }

    public function statuses(): BelongsToMany
    {
        return $this->belongsToMany(Status::class);
    }

    public function dependants(): HasMany
    {
        return $this->hasMany(Dependant::class);
    }

    public function qualifications(): HasMany
    {
        return $this->hasMany(Qualification::class);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }

    public function notes(): HasMany
    {
        return $this->hasMany(Note::class);
    }
}
