<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
                    $table->id();
                    $table->date("odate");
                    $table->bigInteger("cid");
                    $table->date("ddate");
                    $table->integer("billamt");
                    $table->integer("deliverycharges");
                    $table->integer("netamt");
                    $table->string("deliveryaddress");
                    $table->string("firstname");
                    $table->string("lastname");
                    $table->string("city");
                    $table->string('email');
                    $table->integer("phone");
                    $table->string("status");
                    $table->string("mode");
                    $table->timestamps();
                    $table->foreign('cid')->references('id')->on('customer');
                      
             
                 
            
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
