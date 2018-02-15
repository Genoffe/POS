<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role_menu extends Model
{
    use SoftDeletes;
    
    protected $fillable     = [
        'role_id', 'menu_id'
    ];
}
