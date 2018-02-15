<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoleMenu extends Migration
{
    public function up()
    {
        Schema::create('role_menu', function (Blueprint $table) {
            $table->integer('id', true)->unsigned()->nullable(false);

            $table->integer('role_id')->unsigned()->nullable(false);
            $table->integer('menu_id')->unsigned()->nullable(false);

            $table->softDeletes();
            $table->timestamps();

            $table->engine      = 'InnoDB';
            $table->charset     = 'utf8';
            $table->collation   = 'utf8_general_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('role_menu');
    }
}
