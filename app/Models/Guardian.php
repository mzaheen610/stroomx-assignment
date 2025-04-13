<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guardian extends Model
{
    use HasFactory;
    public function student(): HasOne
    {
        return $this->hasOne(Student::class);
    }
    public function franchise(): BelongsTo
    {
        return $this->belongsTo(Franchise::class);
    }
}
