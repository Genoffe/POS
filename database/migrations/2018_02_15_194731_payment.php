<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Payment extends Migration
{
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->integer('id', true)->unsigned()->nullable(false);

            $table->char('name', 128)->nullable(false);
            $table->string('description', 256);

            $table->tinyInteger('is_cash')->nullable(false)->default(1);

            $table->softDeletes();
            $table->timestamps();

            $table->engine      = 'InnoDB';
            $table->charset     = 'utf8';
            $table->collation   = 'utf8_general_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('payment');
    }
}
