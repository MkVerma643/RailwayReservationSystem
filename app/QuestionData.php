<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionData extends Model
{
    protected $table = 'question';
    protected $fillable = [
        'id', 'question', 'created_at', 'updated_at'
    ];
}
