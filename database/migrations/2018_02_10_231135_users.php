<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', true, true)->nullable(false);

            $table->char('username', 32)->unique()->nullable(false);
            $table->char('email', 254)->unique()->nullable(false);
            $table->string('password', 512)->unique()->nullable(false);
            $table->tinyinteger('is_active')->default(0)->nullable(false);

            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();

            $table->engine      = 'InnoDB';
            $table->charset     = 'utf8';
            $table->collation   = 'utf8_general_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
