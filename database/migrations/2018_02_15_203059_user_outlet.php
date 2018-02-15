<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserOutlet extends Migration
{
    public function up()
    {
        Schema::create('user_outlet', function (Blueprint $table) {
            $table->integer('id', true)->unsigned()->nullable(false);

            $table->integer('user_id')->unsigned()->nullable(false);
            $table->integer('outlet_id')->unsigned()->nullable(false);

            $table->softDeletes();
            $table->timestamps();

            $table->engine      = 'InnoDB';
            $table->charset     = 'utf8';
            $table->collation   = 'utf8_general_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_outlet');
    }
}
