<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Outlets extends Migration
{
    public function up()
    {
        Schema::create('outlets', function (Blueprint $table) {
            $table->integer('id', true)->unsigned()->nullable(false);

            $table->char('name', 128)->nullable(false);
            $table->char('address', 192)->nullable(false);

            $table->char('latitude')->nullable(false);
            $table->char('longitude')->nullable(false);

            $table->softDeletes();
            $table->timestamps();

            $table->engine      = 'InnoDB';
            $table->charset     = 'utf8';
            $table->collation   = 'utf8_general_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('outlets');
    }
}
