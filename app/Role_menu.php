<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Auth;

class Role_menu extends Model
{
    use SoftDeletes;
    
    protected $fillable     = [
        'role_id', 'menu_id'
    ];

    public function menu()
    {
        return $this->belongsTo('App\Menus', 'menu_id');
    }

    public function role()
    {
        return $this->belongsTo('App\Roles', 'role_id');
    }
}
