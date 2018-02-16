<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{   
    protected $fillable     = [
        'name', 'url', 'parent', 'icon', 'tag', 'sort'
    ];

    public function role_menu()
    {
        return $this->hasMany('App\Role_menu', 'menu_id');
    }
}