<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {
                $table->id();
                $table->bigInteger("oid");
                $table->bigInteger("pid");
                $table->integer("qty");
                $table->integer("price");
                $table->foreign('oid')->references('id')->on('orders');
               // $table->foreign('pid')->references('id')->on('products');
                $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_detail');
    }
}
