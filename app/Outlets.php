<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Outlets extends Model
{
    use SoftDeletes;

    public function outlet_user()
    {
        return $this->hasMany('App\User_outlet', 'outlet_id');
    }
}
