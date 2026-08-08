<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CareerJob extends Model
{
    protected $fillable = [
        'career_category_id',
        'title',
        'location',
        'type',
        'qualification',
        'experience',
        'salary',
        'responsibilities',
        'skills',
        'status',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(CareerCategory::class, 'career_category_id');
    }
}
