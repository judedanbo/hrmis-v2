<?php

namespace App\Models;

use App\Http\Traits\LogAllTraits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rank extends Model
{
    use HasFactory, LogAllTraits, SoftDeletes;

    protected $fillable = [
        'title',
        'type',
        'job_id',
        'company_id',
        'rank_category_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'job_id' => 'integer',
        'company_id' => 'integer',
        'rank_category_id' => 'integer',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function rankCategory(): BelongsTo
    {
        return $this->belongsTo(RankCategory::class);
    }

    public function job(): BelongsTo
    {
        return $this->belongsTo(Rank::class);
    }

    public function companyPeople(): BelongsToMany
    {
        return $this->belongsToMany(CompanyPerson::class)
            ->using(CompanyPersonJob::class)
            ->as('company_person_job')
            ->withPivot('id', 'start_date', 'end_date', 'remarks', 'company_person_id', 'rank_id')
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
