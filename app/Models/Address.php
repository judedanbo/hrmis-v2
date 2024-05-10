<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'address_line_1',
        'address_line_2',
        'city',
        'state',
        'country',
        'zip_code',
        'person_id',
        'company_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'person_id' => 'integer',
        'company_id' => 'integer',
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function notes(): HasMany
    {
        return $this->hasMany(Note::class);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }
}
