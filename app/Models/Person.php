<?php

namespace App\Models;

use App\Http\Traits\LogAllTraits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory, LogAllTraits, SoftDeletes;

    protected $fillable = [
        'first_name',
        'other_name',
        'surname',
        'date_of_birth',
    ];

    protected $casts = [
        'id' => 'integer',
        'date_of_birth' => 'date',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function companies(): BelongsToMany
    {
        return $this->belongsToMany(Company::class);
    }

    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }

    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    }

    public function identities(): HasMany
    {
        return $this->hasMany(Identity::class);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }

    public function notes(): HasMany
    {
        return $this->hasMany(Note::class);
    }

    public function qualifications(): HasMany
    {
        return $this->hasMany(Qualification::class);
    }
}
