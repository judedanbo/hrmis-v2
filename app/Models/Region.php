<?php

namespace App\Models;

use App\Http\Traits\LogAllTraits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
    use HasFactory, LogAllTraits, SoftDeletes;

    protected $fillable = [
        'name',
        'country',
    ];

    protected $casts = [
        'id' => 'integer',
    ];

    public function districts(): HasMany
    {
        return $this->hasMany(District::class);
    }

    public function capitals(): HasMany
    {
        return $this->hasMany(Capital::class);
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
