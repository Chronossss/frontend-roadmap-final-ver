<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TestQuestion extends Model
{
    protected $fillable = [
        'test_id',
        'question',
    ];

    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }
}
