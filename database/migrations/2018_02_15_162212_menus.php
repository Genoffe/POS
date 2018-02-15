<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Menus extends Migration
{
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->integer('id', true)->unsigned()->nullable(false);

            $table->char('name', 128)->nullable(false);
            $table->char('url', 128)->nullable(false)->unique();
            $table->integer('parent')->nullable(false)->unsigned()->default(0);
            $table->char('icon', 32)->nullable(false);
            $table->char('tag', 128)->nullable(false);
            $table->integer('sort')->nullable(false)->unsigned()->default(0);

            $table->softDeletes();
            $table->timestamps();

            $table->engine      = 'InnoDB';
            $table->charset     = 'utf8';
            $table->collation   = 'utf8_general_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
