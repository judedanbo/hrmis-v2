<?php

namespace App\Models;

use App\Http\Traits\LogAllTraits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use HasFactory, LogAllTraits, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'file',
        'person_id',
        'company_person_id',
        'company_id',
        'unit_id',
        'position_id',
        'rank_id',
        'rank_category_id',
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
        'rank_id' => 'integer',
        'rank_category_id' => 'integer',
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

    public function rank(): BelongsTo
    {
        return $this->belongsTo(Rank::class);
    }

    public function rankCategory(): BelongsTo
    {
        return $this->belongsTo(RankCategory::class);
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
