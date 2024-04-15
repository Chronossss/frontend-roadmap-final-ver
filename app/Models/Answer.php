<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'test_question_id',
        'answer',
        'is_true',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
