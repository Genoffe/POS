<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User_outlet extends Model
{
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function outlet()
    {
        return $this->belongsTo('App\Outlets', 'outlet_id');
    }
}
