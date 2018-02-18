<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Aurphm\Aurphm;

class User extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => env('EMAIL'),
            'password' => Aurphm::hash('secret', env('AURPHM_KEY')),
            'role_id' => 1,
            'is_active' => 1,
        ]);
    }
}