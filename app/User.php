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
        'username', 'email', 'password', 'is_active', 'role_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user_details()
    {
        return $this->hasOne('App\User_details', 'user_id');
    }

    public function user_outlet()
    {
        return $this->hasOne('App\User_outlet', 'user_id');
    }

    public function user_role()
    {
        return $this->belongsTo('App\Roles', 'role_id');
    }

    public function sales()
    {
        return $this->hasMany('App\Sales', 'user_id');
    }
}
