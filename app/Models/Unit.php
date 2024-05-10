<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'type',
        'parent_unit',
        'company_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'parent_unit' => 'integer',
        'company_id' => 'integer',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function parentUnit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function positions(): HasMany
    {
        return $this->hasMany(Position::class);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }

    public function notes(): HasMany
    {
        return $this->hasMany(Note::class);
    }

    public function companyPeople(): BelongsToMany
    {
        return $this->belongsToMany(CompanyPerson::class)
            ->using(CompanyPersonUnit::class)
            ->as('company_person_unit')
            ->withPivot('id', 'start_date', 'end_date', 'remarks', 'company_person_id', 'unit_id')
            ->withTimestamps();
    }
}
