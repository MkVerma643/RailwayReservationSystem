<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainData extends Model
{
    protected $table = 'train';
    protected $fillable = [
        'id','tnumber', 'trainname', 'totalticket',  'created_at', 'updated_at'
    ];
}
