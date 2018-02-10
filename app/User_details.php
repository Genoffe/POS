<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User_details extends Model
{
    use SoftDeletes;
    
    protected $fillabble    = [
        'user_id', 'name', 'birthday', 'gender', 'role_id', 'imageurl'
    ];

    public function users()
    {
        return $this->belongsTo('App\Users', 'user_id');
    }
}
