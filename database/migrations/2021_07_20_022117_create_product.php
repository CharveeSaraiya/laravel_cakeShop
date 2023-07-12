<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('pname');
            $table->integer('price');
            $table->integer('weight');
            $table->integer('unit');
            $table->integer('calories');
            $table->bigInteger('catid');
            $table->bigInteger('oid');
            $table->string('description');
            $table->date('mfgdate');
            $table->date('expdate');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->foreign('oid')->references('id')->on('occasion');
            $table->foreign('catid')->references('id')->on('category');
            $table->string('status');
      
     
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
        Schema::dropIfExists('product');
    }
}
