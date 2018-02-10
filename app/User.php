<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'username', 'email', 'password', 'is_active'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user_details()
    {
        return $this->hasOne('App\User_details', 'user_id');
    }
}
