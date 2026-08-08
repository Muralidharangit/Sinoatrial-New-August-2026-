<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CareerApplication extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'experience_details',
        'career_category_id',
        'role',
        'resume',
        'cover_letter',
        'additional_comments',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(CareerCategory::class, 'career_category_id');
    }
}

