<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SiteConfig extends Migration
{
    public function up()
    {
        Schema::create('site_config', function (Blueprint $table) {
            $table->integer('id', true)->unsigned()->nullable(false);

            $table->char('site_name', 128)->nullable(false);

            $table->softDeletes();
            $table->timestamps();

            $table->engine      = 'InnoDB';
            $table->charset     = 'utf8';
            $table->collation   = 'utf8_general_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('site_config');
    }
}
