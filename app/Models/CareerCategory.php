<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CareerCategory extends Model
{
    protected $fillable = ['name', 'status'];

    public function jobs(): HasMany
    {
        return $this->hasMany(CareerJob::class, 'career_category_id');
    }

    public function applications(): HasMany
    {
        return $this->hasMany(CareerApplication::class, 'career_category_id');
    }
}
