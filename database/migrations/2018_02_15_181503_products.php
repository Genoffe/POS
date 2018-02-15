<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id', true)->unsigned()->nullable(false);

            $table->char('name', 128)->nullable(false);
            $table->char('code', 10)->nullable(false);
            $table->text('description');

            $table->char('image', 128)->nullable(false)->default('//upload/img/product_default.png');

            $table->double('price')->nullable(false)->unsigned()->default(0);

            $table->softDeletes();
            $table->timestamps();

            $table->engine      = 'InnoDB';
            $table->charset     = 'utf8';
            $table->collation   = 'utf8_general_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
