<?php

namespace App\Models;

use App\Http\Traits\LogAllTraits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory, LogAllTraits, SoftDeletes;

    protected $fillable = [
        'title',
        'type',
        'next_job',
        'company_id',
        'job_category_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'next_job' => 'integer',
        'company_id' => 'integer',
        'job_category_id' => 'integer',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function jobCategory(): BelongsTo
    {
        return $this->belongsTo(JobCategory::class);
    }

    public function nextJob(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }

    public function companyPeople(): BelongsToMany
    {
        return $this->belongsToMany(CompanyPerson::class)
            ->using(CompanyPersonJob::class)
            ->as('company_person_job')
            ->withPivot('id', 'start_date', 'end_date', 'remarks', 'company_person_id', 'job_id')
            ->withTimestamps();
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
