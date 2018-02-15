<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserDetails extends Migration
{
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->integer('id', true)->unsigned()->nullable(false);

            $table->unsignedinteger('user_id')->nullable(false);
            $table->unsignedinteger('role_id')->nullable(false);

            $table->char('name', 128)->nullable(false);
            $table->char('imageurl', 128)->nullable(false)->default('/upload/img/user_default.png');
            $table->tinyinteger('gender')->nullable(false)->comment('0 = Woman, 1 = Man');
            $table->date('birthday')->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->engine      = 'InnoDB';
            $table->charset     = 'utf8';
            $table->collation   = 'utf8_general_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
