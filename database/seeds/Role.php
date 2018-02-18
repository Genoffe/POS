<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Role extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Administrator',
            'is_admin' => 1
        ]);
    }
}
