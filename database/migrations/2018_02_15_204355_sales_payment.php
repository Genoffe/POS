<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SalesPayment extends Migration
{
    public function up()
    {
        Schema::create('sales_payment', function (Blueprint $table) {
            $table->integer('id', true)->unsigned()->nullable(false);

            $table->integer('sales_id')->unsigned()->nullable(false);
            $table->integer('payment_id')->unsigned()->nullable(false);
            
            $table->double('amount')->unsigned()->nullable(false);
            $table->double('change')->nullable(false)->unsigned()->default(0);

            $table->timestamps();

            $table->engine      = 'InnoDB';
            $table->charset     = 'utf8';
            $table->collation   = 'utf8_general_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales_payment');
    }
}
