<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_interests extends Model
{
    //
    protected $casts = [
        'id' => 'array'
    ];
}
