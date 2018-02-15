<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roles extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public function users()
    {
        return $this->hasMany('App\Users', 'role_id');
    }
}
