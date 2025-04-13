<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Franchise extends Model
{
    use HasFactory;
    public function guardians(): HasMany
    {
        return $this->hasMany(Guardian::class);
    }
    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }
}
