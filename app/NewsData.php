<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsData extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'id','title', 'description','created_at', 'updated_at'
    ];
}
