<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'id','name', 'email', 'password', 'created_at', 'active', 'votes'
    ];
}