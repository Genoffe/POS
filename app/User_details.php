<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_details extends Model
{
    protected $fillabble    = [
        'name', 'birthday', 'gender', 'access_id', 'imageurl'
    ];
}
