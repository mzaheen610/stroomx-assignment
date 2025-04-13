<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'start_time', 'end_time', 'franchise_id'];
    public function franchise(): BelongsTo
    {
        return $this->belongsTo(Franchise::class);
    }
}
