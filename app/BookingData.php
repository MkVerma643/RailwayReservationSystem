<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingData extends Model
{
    protected $table = 'booking';
    protected $fillable = [
        'id','trainname', 'depart_date', 'class', 'answer'
    ];
}
